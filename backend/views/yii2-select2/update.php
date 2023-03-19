<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Yii2Select2 $model */

$this->title = 'Update Yii2select2: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Yii2select2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii2-select2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
