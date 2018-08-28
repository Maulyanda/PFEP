<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-print'], ['class' => '']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [


          'no',
          'car',
          //'code_ML_113',
          //'code_ML_210',
          'part_used',
          // 'part_status1',
          'EWO',
          // 'part_status2',
          //'part_name',
          // 'cn_113',
          // 'cn_210',
          // 'usage',
          // 'storage',
          'dloc',
          // 'les',
          // 'check',
          // 'sps_dloc',
          'uloc',
          // 'cal_min',
          // 'cal_max',
          'act_min',
          'act_max',
          'stack',
          'direction',
          'row',
          // 'shop',
          // 'pull_type',
          // 'section',
          // 'model',
          // 'part_type',
          // 'source',
          // 'supplier_code',
          // 'supplier_name',
          // 'supplier_type',
          // 'supplier_name_consignee',
          // 'over_pkg_code',
          // 'over_snp',
          // 'over_l',
          // 'over_w',
          // 'over_h',
          // 'ware_pkg_code',
          // 'ware_snp',
          // 'ware_l',
          // 'ware_w',
          // 'ware_h',
          // 'on_pkg_code',
          // 'on_snp',
          // 'on_l',
          // 'on_w',
          // 'on_h',

            ['class' => 'yii\grid\Action'],
        ],
    ]); ?>

</div>
