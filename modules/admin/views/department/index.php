<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use  app\models\Rank;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\DepartmentSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','List Departments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-department-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'resizableColumns'=>true,
        'pjax'=>true,
        'bordered'=>true,
        'responsive'=>true,
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_department',
            [
               'attribute'=> 'id_rank',
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(Rank::find()->asArray()->all(),'id','name_rank'),
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'select class'],
                'value'=>function($data)
                {
                    return $data->getTextRank($data->id_rank);
                }
            ],
            [
               'attribute'=> 'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'filterType'=>GridView::FILTER_SELECT2,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'select class'],
                'value'=>function($data)
                {
                    return $data->getTextSatus($data->status);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-book"></i>'.Yii::t('app','Department').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]

    ]); ?>
</div>
