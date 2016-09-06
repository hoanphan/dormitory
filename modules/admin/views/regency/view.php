<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Regency */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Regencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regency-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'mode'=>DetailView::MODE_VIEW,
        'bordered'      => true,
        'striped'       => true,
        'condensed'     => true,
        'responsive'    => true,
        'hover'         => true,
        'hAlign'        => 'right',
        'vAlign'        => 'middle',
        'fadeDelay'     => 809,
        'model' => $model,
        'deleteOptions'=>['delete', 'id' => $model->id],
        'panel'=>[
            'heading'=>'<i class="fa fa-university"></i> '.Yii::t('app','Regency Details')
,            'type'=>DetailView::TYPE_SUCCESS,
            'footer'=>false,
        ],
        'attributes' => [
            [
                'group'      => true,
                'label'      => 'Thông tin chính',
                'rowOptions' => ['class' => 'info'],
            ],
            [
                'attribute'=>'id',
                'type'=>DetailView::INPUT_HIDDEN,
                'label'=>Yii::t('app','id regency'),
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'name',
                'type'=>DetailView::INPUT_TEXT,
                'label'=>Yii::t('app','name regency'),
                'valueColOptions'=>['style'=>'width:40%']
            ],
            [
                'attribute'=>'status',
                'type'=>DetailView::INPUT_SWITCH,
                'value'=>$model->getTextStatus($model->status),
                'label'=>Yii::t('app','name regency'),
                'valueColOptions'=>['style'=>'width:40%'],
                'widgetOptions' => [
                    'pluginOptions' => [
                        1 => 'Active',
                        0 => 'InActive',
                    ]
                ],
            ],
        ],
    ]) ?>

</div>
