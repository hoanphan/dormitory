<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ListStudent */

$this->title = 'Update List Student: ' . $model->MaHocSinh;
$this->params['breadcrumbs'][] = ['label' => 'List Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaHocSinh, 'url' => ['view', 'id' => $model->MaHocSinh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="list-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
