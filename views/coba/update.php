<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coba */

$this->title = 'Update Coba: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Cobas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
