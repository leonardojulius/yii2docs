
<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;

use yii\helpers\Url;


?>
<?= Html::button('Create Index',['value'=>Url::to(['yii2-contents/create']),'class'=>'btn btn-success','id'=>'modalButton']).'<br>';?>
 
<?php 


Modal::begin([

    'id'=>'modal',
    'size'=>'modal-xl',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => false],
    ]);

echo "<div id='modalContent'></div>";

Modal::end();

$js = <<< JS

$(function(){

$('#modalButton').click(function(){

$('#modal').modal('show')

.find('#modalContent')
.load($(this).attr('value'));

})
});

JS;

// register your javascript
$this->registerJs($js);
?>