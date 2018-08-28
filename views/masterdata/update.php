<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masterdata */

$this->title = 'Update Master Data: ' . ' ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Master Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="masterdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
