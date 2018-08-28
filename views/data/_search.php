<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'car') ?>

    <?= $form->field($model, 'code_ML_113') ?>

    <?= $form->field($model, 'code_ML_210') ?>

    <?= $form->field($model, 'part_used') ?>

    <?php // echo $form->field($model, 'part_status1') ?>

    <?php // echo $form->field($model, 'EWO') ?>

    <?php // echo $form->field($model, 'part_status2') ?>

    <?php // echo $form->field($model, 'part_name') ?>

    <?php // echo $form->field($model, 'cn_113') ?>

    <?php // echo $form->field($model, 'cn_210') ?>

    <?php // echo $form->field($model, 'usage') ?>

    <?php // echo $form->field($model, 'storage') ?>

    <?php // echo $form->field($model, 'dloc') ?>

    <?php // echo $form->field($model, 'les') ?>

    <?php // echo $form->field($model, 'check') ?>

    <?php // echo $form->field($model, 'sps_dloc') ?>

    <?php // echo $form->field($model, 'uloc') ?>

    <?php // echo $form->field($model, 'cal_min') ?>

    <?php // echo $form->field($model, 'cal_max') ?>

    <?php // echo $form->field($model, 'act_min') ?>

    <?php // echo $form->field($model, 'act_max') ?>

    <?php // echo $form->field($model, 'stack') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <?php // echo $form->field($model, 'row') ?>

    <?php // echo $form->field($model, 'shop') ?>

    <?php // echo $form->field($model, 'pull_type') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'part_type') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'supplier_code') ?>

    <?php // echo $form->field($model, 'supplier_name') ?>

    <?php // echo $form->field($model, 'supplier_type') ?>

    <?php // echo $form->field($model, 'supplier_name_consignee') ?>

    <?php // echo $form->field($model, 'over_pkg_code') ?>

    <?php // echo $form->field($model, 'over_snp') ?>

    <?php // echo $form->field($model, 'over_l') ?>

    <?php // echo $form->field($model, 'over_w') ?>

    <?php // echo $form->field($model, 'over_h') ?>

    <?php // echo $form->field($model, 'ware_pkg_code') ?>

    <?php // echo $form->field($model, 'ware_snp') ?>

    <?php // echo $form->field($model, 'ware_l') ?>

    <?php // echo $form->field($model, 'ware_w') ?>

    <?php // echo $form->field($model, 'ware_h') ?>

    <?php // echo $form->field($model, 'on_pkg_code') ?>

    <?php // echo $form->field($model, 'on_snp') ?>

    <?php // echo $form->field($model, 'on_l') ?>

    <?php // echo $form->field($model, 'on_w') ?>

    <?php // echo $form->field($model, 'on_h') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
