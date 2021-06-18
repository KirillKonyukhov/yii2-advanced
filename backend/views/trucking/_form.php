<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trucking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trucking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idclient')->textInput() ?>

    <?= $form->field($model, 'iddriver')->textInput() ?>

    <?= $form->field($model, 'idmanager')->textInput() ?>

    <?= $form->field($model, 'idcargo')->textInput() ?>

    <?= $form->field($model, 'idroute')->textInput() ?>

    <?= $form->field($model, 'idtruck')->textInput() ?>

    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'date_trucking')->textInput() ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
