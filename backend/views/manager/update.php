<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manager */

$this->title = 'Update Manager: ' . $model->idmanager;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmanager, 'url' => ['view', 'id' => $model->idmanager]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manager-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
