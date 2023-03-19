<?php

use backend\models\Yii2Contents;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Yii2Select2;

use yii\bootstrap5\Modal;
/** @var yii\web\View $this */
/** @var backend\models\Yii2ContentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Yii2contents';
$this->params['breadcrumbs'][] = $this->title;
?>






<div class="yii2-contents-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p> </p>
   

    <?php echo $this->render('_modalCreate'); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [

            [
               'label'=>'title',
               'format' => 'raw',
               'value'=>function($model, $key, $index, $widget){
                   return Html::a( $model->title, ['yii2-contents/view', 'id'=>$model->id],['class' => 'remove-underline']);
               }
           ],

            [
              
                   'label'=>'category',
                   'format' => 'raw',
                   'value'=>function($model, $key, $index, $widget){
                       return  !empty($model->category) ? Html::a( Yii2Select2::findOne($model->category)->name, ['yii2-contents/view', 'id'=>$model->id],['class' => 'remove-underline']) : '';
                   }
             ],

 
      
        ],
    ]); ?>


</div>

