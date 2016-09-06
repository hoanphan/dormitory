<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ListDepartment */

$this->title = Yii::t('app','Create List Department');
$this->params['breadcrumbs'][] = ['label' => 'List Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-department-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
