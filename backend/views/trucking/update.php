<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trucking */

$this->title = 'Update Trucking: ' . $model->idtruking;
$this->params['breadcrumbs'][] = ['label' => 'Truckings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtruking, 'url' => ['view', 'id' => $model->idtruking]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trucking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
