<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ListDepartment */

$this->title = Yii::t('app','Update List Department: ') . $model->id_department;
$this->params['breadcrumbs'][] = ['label' => 'List Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_department, 'url' => ['view', 'id' => $model->id_department]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="list-department-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
