<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $title
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    public function MyVal($attribute,$message){
        $model = self::find()->where(['title'=>$this->title])->count();
        if($model > 0){
            $this->addError($attribute,'Тег уже есть');
        }
    }


     public function Error($attribute,$message){
        if($this->title[0] == '='){
            $this->addError($attribute,'Тег не может начинаться со знака =');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            // [['id'], 'integer'],
            [['title'], 'string', 'max' => 170],
            [['title'], 'MyVal'],
            [['title'], 'Error'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
