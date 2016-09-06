<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DormitoryManagement */

$this->title = 'Create Dormitory Management';
$this->params['breadcrumbs'][] = ['label' => 'Dormitory Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-management-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
