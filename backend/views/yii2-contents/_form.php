<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use backend\models\Yii2Select2;

/** @var yii\web\View $this */
/** @var backend\models\Yii2Contents $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="yii2-contents-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'category')->widget(Select2::classname(), [

     'data' => ArrayHelper::map(Yii2Select2::find()->all(),'id','name'),
     'options' => ['placeholder' => 'Choose a category'],
     'pluginOptions' => [
        'allowClear' => true
      ],
     ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
