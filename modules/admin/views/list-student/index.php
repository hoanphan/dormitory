<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\ListStudentSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create List Student', ['create'], ['class' => 'btn btn-success']) ?>
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

            'MaHocSinh',
            'TenThuongGoi',
             [
                 'attribute'=>'NgaySinh',
                 'filterType'=>GridView::FILTER_DATE,
                 'filterWidgetOptions'=>[
                    'size'=>'xs',
                     'pluginOptions' => [
                         'autoclose'=>true,
                         'format' => 'dd-MM-yyyy'
                     ]
                 ],
             ],
             [
                'attribute'=> 'GioiTinh',
                 'filterType'=>GridView::FILTER_SELECT2,
                 'filter'=>[0=>Yii::t('app','Men'),1=>Yii::t('app','Girl')]
             ]
            ,
             'NoiSinh',
             'QueQuan',
            // 'HoTenBo',
                'Anh',
             'MaDanToc',
            // 'MaTonGiao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading'=>'<i><i class="glyphicon glyphicon-leaf"></i>'.Yii::t('app','List Student').'</i>',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus">'.Yii::t('app',' Create').'</i>', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i>'.Yii::t("app"," Reset").'.', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ]
    ]); ?>
</div>
