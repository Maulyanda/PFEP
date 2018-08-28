<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Masterdata;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Masterdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masterdata-form">
  <div class="panel panel-info">
        <div class="panel-heading">
            <h4>
                <?= $this->title ?>
                <span class="pull-right">
                    <?= Html::a(' Kembali', ['index'], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>
                </span>
            </h4>
        </div>


    <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
      <div class="col-md-3">
        <?= $form->field($model, 'part_used')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'part_status1')->dropDownList([ '-' => '-', 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

        <?= $form->field($model, 'EWO')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'part_status2')->dropDownList([ '-' => '-', 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

        <?= $form->field($model, 'usage')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'storage')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'dloc')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'sps_dloc')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'uloc')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'act_min')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'act_max')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-3">
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
      </div>

      <div class="col-md-3">
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
      </div>

      <div class="col-md-3">
        <?= $form->field($model, 'ware_h')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'on_pkg_code')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'on_snp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'on_l')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'on_w')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'on_h')->textInput(['maxlength' => true]) ?>

        <?php
        $model->date = date('d-m-Y');
        $model->updated_by = (Yii::$app->user->identity->username);
        ?>

        <?= $form->field($model, 'date')->textInput(['readOnly'=>true]) ?>

        <?= $form->field($model, 'updated_by')->textInput(['readOnly' => true]) ?>
      </div>

    <div class="col-md-3 ">
      <span class="pull-right">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn w3-btn w3-hover-aqua' : 'btn w3-btn w3-hover-blue']) ?>
      </span>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
