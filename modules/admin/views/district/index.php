<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\City;
use  yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\DistrictSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách quận huyện';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'resizableColumns'=>true,
        'responsive'=>true,
        'pjax'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id_city',
                'format'=>'raw',
                'filter'=>ArrayHelper::map(City::find()->asArray()->all(),'id','name'),
                'value'=>function($data){
                    return $data->getTextCity($data->id_city);
                }
            ],
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>Quận huyện</h3>',
            'type'=>GridView::TYPE_SUCCESS,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Thêm mới', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
