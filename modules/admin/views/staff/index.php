<?php

use app\models\Nation;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\ModelSeach\StaffSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'resizableColumns'=>true,
        'pjax'=>true,
        'bordered'=>true,
        'responsive'=>true,
        'rowOptions'=>['style'=>[
            'width'=>'20%',
        ]],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_staff',
            'fullname',
            [
                'attribute'=>'id_nation',
                'filter'=>ArrayHelper::map(Nation::find()->asArray()->all(),'id','name'),
                'filterType'=>GridView::FILTER_SELECT2,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select Nation')],
                'value'=>function($data)
                {
                    return $data->getTextNation($data->id_nation);
                }
            ],
            [
                'attribute'=> 'day_birth',
                'width'=>'200px',
                'format'=>['date', 'php:d/m/y'],
                'filterType'=>GridView::FILTER_DATE,
                'filterWidgetOptions'=>[
                    'language'=>'vi',
                    'removeButton' => false,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy'
                    ]
                ],
            ],
            [
                'attribute'=>'imager',
                'filter'=>false,
                'format'=>'html',
                'value'=>function($data){
                    return '<a><img style="width: 100px;height: 100px" src="'.$data->getUrlPicture($data->imager).'"></a>';
                }

            ],
            // 'address',
            // 'home_town',
            // 'dormitory',
            [
                'attribute'=>'sex',
                'filter'=>[0=>Yii::t('app','Men'),1=>Yii::t('app','Girl')],
                'filterType'=>GridView::FILTER_SELECT2,
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select Sex')],
                'value'=>function($data)
                {
                    return $data->getTextStatus($data->sex);
                }
            ],

            [
                'attribute'=> 'id_regency',
                'filter'=>ArrayHelper::map(\app\models\Regency::find()->asArray()->all(),'id','name'),
                'filterType'=>GridView::FILTER_SELECT2,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select Regency')],
                'value'=>function($data)
                {
                    return $data->getTextRegioncy($data->id_regency);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-leaf"></i>'.Yii::t('app','List Staff').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
