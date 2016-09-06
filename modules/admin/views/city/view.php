<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\City */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-view">

    <h1><?= Html::encode($this->title) ?></h1>




    <?= DetailView::widget([
        'model' => $model,
        'mode'          => 'view',
        'bordered'      => true,
        'striped'       => true,
        'condensed'     => true,
        'responsive'    => true,
        'hover'         => true,
        'hAlign'        => 'right',
        'vAlign'        => 'middle',
        'fadeDelay'     => 809,
        'panel'         => [
            'heading' => 'ID # ' . $model->id,
            'type'    => DetailView::TYPE_PRIMARY,
        ],
        'container'     => ['id' => 'kv-demo'],
        'formOptions'   => ['action' => Url::current(['#' => 'kv-demo'])],
        'deleteOptions'=>[
          'url'=>['delete', 'id' => $model->id]
        ],
        'attributes'    => [
            [
                'group'      => true,
                'label'      => 'Thông tin chính',
                'rowOptions' => ['class' => 'info'],
            ],
            [
                'format'          => 'raw',
                'attribute'=>'id',
                'type'=>DetailView::INPUT_HIDDEN,
                'value'           => '<b><em>' . $model->id . '</em></b>',
                'valueColOptions' => ['style' => 'width:80%'],
            ],
            [
                'attribute'=>'name',
                'format'=>'raw',
                'type'=>DetailView::INPUT_TEXT,
                'value'=>$model->name,
                'valueColOptions'=>['style' => 'width:80%']
            ],
        ],
    ]) ?>

</div>
