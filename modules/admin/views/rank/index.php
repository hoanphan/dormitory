<?php

use yii\helpers\Html;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\RankSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* */
$this->title = 'Ranks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rank-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'resizableColumns'=>true,
        'responsive'=>true,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_rank',
            [
                'attribute'=>'status',
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>[0=>'Inactive',1=>'Active'],
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'select status'],
                'value'=>function($data)
                {
                    return $data->getTextStatus($data->status);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="fa fa-graduation-cap"></i>'.Yii::t('app','Rank').'</h3>',
            'type'=>'success',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app','Create').'.', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> '.Yii::t('app','Reset').'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ],
    ]); ?>
</div>
