<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ListStudent */

$this->title = $model->MaHocSinh;
$this->params['breadcrumbs'][] = ['label' => 'List Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaHocSinh], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaHocSinh], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MaHocSinh',
            'HoDem',
            'Ten',
            'TenThuongGoi',
            'DaQuaLop',
            'NgaySinh',
            'GioiTinh',
            'NoiSinh',
            'QueQuan',
            'HoTenBo',
            'Anh',
            'MaDanToc',
            'MaTonGiao',
        ],
    ]) ?>

</div>
