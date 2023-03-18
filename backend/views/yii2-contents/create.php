<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Yii2Contents $model */

$this->title = 'Create Yii2contents';
$this->params['breadcrumbs'][] = ['label' => 'Yii2contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii2-contents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
