<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coba */

$this->title = $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Cobas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coba-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no], [
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
            'no',
            'car',
            'code_ML_113',
            'code_ML_210',
            'part_used',
            'part_status1',
            'EWO',
            'part_status2',
            'part_name',
            'cn_113',
            'cn_210',
            'usage',
            'storage',
            'dloc',
            'les',
            'check',
            'sps_dloc',
            'uloc',
            'cal_min',
            'cal_max',
            'act_min',
            'act_max',
            'stack',
            'direction',
            'row',
            'shop',
            'pull_type',
            'section',
            'model',
            'part_type',
            'source',
            'supplier_code',
            'supplier_name',
            'supplier_type',
            'supplier_name_consignee',
            'over_pkg_code',
            'over_snp',
            'over_l',
            'over_w',
            'over_h',
            'ware_pkg_code',
            'ware_snp',
            'ware_l',
            'ware_w',
            'ware_h',
            'on_pkg_code',
            'on_snp',
            'on_l',
            'on_w',
            'on_h',
            'date',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
