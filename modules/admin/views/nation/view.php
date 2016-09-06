<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Nation */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nation-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'mode'=>DetailView::MODE_VIEW,
        'deleteOptions'=>[
            'confirm'=>'Bạn có muốn xóa đối tượng này không?',
            'url'=>['delete', 'id' => $model->id]
        ],
        'saveOptions'=>[
            'url'=>['update']
        ],
        'panel'=>[
            'heading'=>'<i class="glyphicon glyphicon-book"></i> Nation #' . $model->id,
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'id',
            'name',

        ],
    ]) ?>

</div>
