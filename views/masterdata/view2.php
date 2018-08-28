<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\data */

$this->title = $model->part_used;
$this->params['breadcrumbs'][] = ['label' => 'Master Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-view2">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

          <?= Html::a(' Back', ['/masterdata/view', 'id'  => $model->no], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>

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
