<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trucking */

$this->title = 'Create Trucking';
$this->params['breadcrumbs'][] = ['label' => 'Truckings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trucking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
