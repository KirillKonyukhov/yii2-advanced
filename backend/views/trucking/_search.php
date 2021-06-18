<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TruckingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trucking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtruking') ?>

    <?= $form->field($model, 'idclient') ?>

    <?= $form->field($model, 'iddriver') ?>

    <?= $form->field($model, 'idmanager') ?>

    <?= $form->field($model, 'idcargo') ?>

    <?php // echo $form->field($model, 'idroute') ?>

    <?php // echo $form->field($model, 'idtruck') ?>

    <?php // echo $form->field($model, 'payment_date') ?>

    <?php // echo $form->field($model, 'date_trucking') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
