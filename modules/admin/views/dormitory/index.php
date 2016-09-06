<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\ModelSeach\DormitorySeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dormitories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-index">

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
            'name_dormitory',
            'layer_number',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-leaf"></i>'.Yii::t('app','List Dormitory').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
