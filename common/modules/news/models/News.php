<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $text
 * @property string $time
 * @property string $authors
 * @property string $image
 * @property string $title
 * @property string $short
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'time', 'authors', 'image', 'title', 'short'], 'required'],
            [['text'], 'string'],
            [['time'], 'safe'],
            [['authors'], 'string', 'max' => 157],
            [['image', 'title'], 'string', 'max' => 250],
            [['short'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'time' => 'Time',
            'authors' => 'Authors',
            'image' => 'Image',
            'title' => 'Title',
            'short' => 'Short',
        ];
    }
}
