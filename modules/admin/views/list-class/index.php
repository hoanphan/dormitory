<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use  yii\helpers\ArrayHelper;
use app\models\Rank;
use app\models\ListDepartment;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\ListClassSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-class-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create List Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'resizableColumns'=>true,
        'pjax'=>true,
        'bordered'=>true,
        'responsive'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name_class',
            [
                'attribute'=>'id_rank',
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
               'attribute'=> 'id_department',
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(ListDepartment::find()->all(),'id_department','name_department'),
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'select class'],
                'value'=>function($data)
                {
                    return $data->getTextDepartment($data->status);
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
            'heading'=>'<i><i class="glyphicon glyphicon-leaf"></i>'.Yii::t('app','List Class').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
