<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use  app\models\Dormitory;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\ModelSeach\DormitoryManagementSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','Dormitory Managements');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-management-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'resizableColumns'=>true,
        'pjax'=>true,
        'bordered'=>true,
        'responsive'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id_staff',
                'filter'=>ArrayHelper::map(\app\models\Staff::find()->asArray()->all(),'id_staff','fullname'),
                'filterType'=>GridView::FILTER_SELECT2,
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select staff')],
                'value'=>function($data)
                {
                    return $data->getTextStaff($data->id_staff);
                },
                'group'=>true,
            ],
            [
                'attribute'=>'id_dormitory',
                'filter'=>ArrayHelper::map(Dormitory::find()->asArray()->all(),'id_dormitory','name_dormitory'),
                'filterType'=>GridView::FILTER_SELECT2,
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select staff')],
                'value'=>function($data)
                {
                    return $data->getTextDormitory($data->id_dormitory);
                }
            ],

            [
                'attribute'=>'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'filterType'=>GridView::FILTER_SELECT2,
                'filterInputOptions'=>['placeholder'=>Yii::t('app','Select status')],
                'value'=>function($data)
                {
                    return $data->getTextStatus($data->status);
                }
            ],


            ['class' => 'yii\grid\ActionColumn']
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-leaf"></i>'.Yii::t('app','List management Dormitory').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
