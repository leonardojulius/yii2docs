<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Yii2Select2 $model */

$this->title = 'Create Yii2select2';
$this->params['breadcrumbs'][] = ['label' => 'Yii2select2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii2-select2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
