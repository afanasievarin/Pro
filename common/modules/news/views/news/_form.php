<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']]); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'authors')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'time')->widget(DateTimePicker::className(),[
    'type' => DateTimePicker::TYPE_INPUT,
    'options' => ['placeholder' => 'Ввод даты/времени...'],
    'convertFormat' => true,
    'pluginOptions' => [
        'format' => 'dd-M-yyyy hh:ii',
        'autoclose'=>true,
    ]
]);
 ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text')->widget(\common\components\widgets\Redactor::className()) ?>

   

   
    

   

    <div class="form-group">
        <?= Html::submitButton(Yii::t('ML', $model->isNewRecord ? 'Create' : 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
