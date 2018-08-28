<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coba */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coba-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_ML_113')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_ML_210')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_used')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_status1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EWO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_status2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cn_113')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cn_210')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dloc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'les')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'check')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sps_dloc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uloc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cal_min')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cal_max')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_min')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_max')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'row')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pull_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_name_consignee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_pkg_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_snp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_l')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_h')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ware_pkg_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ware_snp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ware_l')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ware_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ware_h')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_pkg_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_snp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_l')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_h')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
