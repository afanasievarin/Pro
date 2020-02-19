<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\modules\roles\models\ACLRole;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\Tags */

$this->title = Yii::t('ML', $model->title);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a(Yii::t('ML', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('ML', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
        <?= Html::a(Yii::t('ML', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ML', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
        ],
    ]) ?>

</div>
