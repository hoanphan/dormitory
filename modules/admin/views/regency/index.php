<?php

use yii\helpers\Html;
use  kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\RegencySeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title =Yii::t('app','Regencies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regency-index">

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

            'name',
            [
                'attribute'=>'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'value'=>function($data)
                {
                    if($data->status==0)
                        return 'Inactive';
                    elseif($data->status==1)
                        return 'Active';
                    else
                        return 'Unknown';

                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-book"></i>'.Yii::t('app','Regency').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
