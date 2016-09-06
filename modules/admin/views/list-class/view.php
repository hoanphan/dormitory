<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use  yii\helpers\ArrayHelper;
use app\models\Rank;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\ListClass */

$this->title = $model->id_class;
$this->params['breadcrumbs'][] = ['label' => 'List Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-class-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_class], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_class], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'mode'=>DetailView::MODE_VIEW,
        'bordered'      => true,
        'striped'       => true,
        'condensed'     => true,
        'responsive'    => true,
        'hover'         => true,
        'hAlign'        => 'right',
        'vAlign'        => 'middle',
        'fadeDelay'     => 809,
        'deleteOptions'=>['delete', 'id' => $model->id_class],
        'panel'=>[
            'heading'=>'<i class="glyphicon glyphicon-qrcode"></i> '.Yii::t('app','List class Details')
            ,            'type'=>DetailView::TYPE_SUCCESS,
            'footer'=>false,
        ],
        'attributes' => [
            [
                'group'=>true,
                'label'=>'Thông tin chính ',
                'rowOptions' => ['class' => 'info'],
            ],
            [
                'attribute'=>    'id_class',
                'type'=>DetailView::INPUT_HIDDEN,
                'format'=>'html',
                'value'=>'<i>'.$model->id_class.'</i>',
                'valueColOptions' => ['style' => 'width:80%'],
            ],
            [
                'attribute'=>    'name_class',
                'type'=>DetailView::INPUT_TEXT,
                'format'=>'html',
                'value'=>$model->name_class,
                'valueColOptions' => ['style' => 'width:80%'],
            ],
            [
                'attribute'=>    'id_rank',
                'type'=>DetailView::INPUT_SELECT2,
                'widgetOptions'   => [
                    'data'=>ArrayHelper::map(Rank::find()->asArray()->all(),'id','name_rank')
                ],
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'select rank'],
                'valueColOptions' => ['style' => 'width:30%'],
                'value'=>$model->id_rank,
            ],
            [
                'attribute'=>    'id_department',
                'type'=>DetailView::INPUT_SELECT2,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>[
                        'depends'=>['select2-selection__rendered'],
                        'placeholder' => 'Select...',
                        'url' => Url::to(['/site/subcat'])
                    ],
                ],


                'value'=>$model->id_department,
            ],

            'status',
        ],
    ]) ?>

</div>
