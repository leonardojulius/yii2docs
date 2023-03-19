<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use backend\models\Yii2Select2;
/** @var yii\web\View $this */
/** @var backend\models\Yii2ContentsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="yii2-contents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?= $form->field($model, 'category')->widget(Select2::classname(), [

'data' => ArrayHelper::map(Yii2Select2::find()->all(),'id','name'),
'options' => ['placeholder' => 'Choose a category'],
'pluginOptions' => [
'allowClear' => true
],
]); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       
        <?= Html::a('Reset', ['index'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
