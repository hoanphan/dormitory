<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DormitoryManagement */

$this->title = 'Update Dormitory Management: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dormitory Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dormitory-management-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>

</div>
