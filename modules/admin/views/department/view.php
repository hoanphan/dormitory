<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use  yii\helpers\ArrayHelper;
use app\models\Rank;
/* @var $this yii\web\View */
/* @var $model app\models\ListDepartment */

$this->title = $model->name_department;
$this->params['breadcrumbs'][] = ['label' => 'List Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-department-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'mode'=>DetailView::MODE_VIEW,
        'bordered'=>true,
        'striped'=>true,
        'condensed'=>true,
        'responsive'=>true,
        'model' => $model,
        'deleteOptions'=>[
            'url'=>['delete', 'id' => $model->id_department],
        ],
        'attributes' => [
            [
                'group'      => true,
                'label'      => 'Thông tin chính',
                'rowOptions' => ['class' => 'info'],
            ],
            [
                'attribute'=>'id_department',
                'type'=>DetailView::INPUT_HIDDEN,
                'label'=>Yii::t('app','id department'),
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
               'attribute'=> 'name_department',
                'type'=>DetailView::INPUT_TEXT,
                'label'=>Yii::t('app','name department'),
                'valueColOptions'=>['style'=>'width:70%']
            ],
            [
                'attribute'=> 'id_rank',
                'value'=>$model->getTextRank($model->id_rank),
                'type'=>DetailView::INPUT_SELECT2,
                'widgetOptions'=>[
                  'data'=> ArrayHelper::map(Rank::find()->where(['status'=>1])->all(),'id','name_rank')
                ],
                'label'=>Yii::t('app','name rank'),

                'valueColOptions'=>['style'=>'width:70%']
            ],
            [
                'attribute'=>'status',
                'value'=>$model->getTextSatus($model->status),
                'type'=>DetailView::INPUT_SWITCH,
                'widgetOptions'=>[
                    'data'=> [0=>false,1=>true]
                ],
                'label'=>Yii::t('app','status'),
            ],
        ],
        'hAlign'        => 'right',
        'vAlign'        => 'middle',
        'fadeDelay'     => 809,
        'panel'=>[
            'heading'=>'<i class="fa  fa-cogs"></i> '.Yii::t('app','Department Details')
            ,            'type'=>DetailView::TYPE_SUCCESS,
            'footer'=>false,
        ],
    ]) ?>

</div>
