<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Yii2Select2;
/** @var yii\web\View $this */
/** @var backend\models\Yii2Contents $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yii2contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="yii2-contents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
 

            [
                'label'=>'Category',
                'displayOnly'=>true,
                'value'=> !empty($model->category) ? Yii2Select2::findOne(['id'=> $model->category])->name : '',
                'valueColOptions'=>['style'=>'width:30%']
            ],
            
            'title',
            'description:ntext',
        ],
    ]) ?>

</div>
