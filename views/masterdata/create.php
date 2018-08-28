<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Masterdata */

$this->title = 'Create Master Data';
$this->params['breadcrumbs'][] = ['label' => 'Master Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masterdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
