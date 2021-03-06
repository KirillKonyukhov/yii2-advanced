<?php
/* @var $searchModel app\models\CargoSearch */
/* @var $model app\models\Cargo */
/* @var $searchModelName string */
/* @var $modelName string */
/* @var $tableName string */
/* @var $loading_img string */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\StringHelper;

$this->title = 'Cargos';
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('index/_js_plugins', ['modelName'=>$modelName, 'loading_img' => $loading_img]);
Yii::$app->view->registerJs($this->render('index/_js_table', ['modelName'=>$modelName, 'loading_img' => $loading_img, 'controller_id' => Yii::$app->controller->id]));
?>


<!-- Этот id нужен для разделения crud-ов, когда на одной странице находится несколько таких таблиц, чтобы на каждую таблицу дейстовали свои кнопки. -->
<!-- This id required for the separation of several crud-s, when some crud-tables are on the same page. Dividing them by the id, the every buttons works for corresponding tables. -->
<div id="<?= $modelName?>-wrapper">

	<!-- The custom validation errors will be displayed in this block -->
	<div id="<?=$modelName?>-errors"></div>

	<?php $form = ActiveForm::begin(['id'=>$modelName.'-form']); ?>

	<div>
		<!-- Additional table header -->
		<?= $this->render('index/_tableHeader') ?>

		<!-- Table -->
		<div class="grid-view">
			<table class="table table-striped table-bordered table-condensed" id="<?=$modelName?>-table">
				<thead>
					<tr>
						<th><input type="checkbox" class="select-all-records-checkbox" onclick="jQuery(this).parents('table').find('tbody td:nth-child('+(jQuery(this).parents('th')[0].cellIndex+1)+') :checkbox').prop('checked', jQuery(this).prop('checked')); jQuery(this).parents('table').find('tbody tr:has(:checkbox)').toggleClass('danger', jQuery(this).prop('checked'));"></th>
						<th>#</th>
						<th data-sort="<?=$tableName?>.idcargo"><a href="#" onclick="return false;"><?=$searchModel->getAttributeLabel('idcargo')?></a></th>
						<th data-sort="<?=$tableName?>.name"><a href="#" onclick="return false;"><?=$searchModel->getAttributeLabel('name')?></a></th>
						<th data-sort="<?=$tableName?>.type"><a href="#" onclick="return false;"><?=$searchModel->getAttributeLabel('type')?></a></th>
						<th data-sort="<?=$tableName?>.weight"><a href="#" onclick="return false;"><?=$searchModel->getAttributeLabel('weight')?></a></th>
						<th style="width:120px;">Actions&nbsp;</th>
					</tr>
					<tr class="filters">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="text" name="<?=$searchModelName?>[idcargo]" class="form-control search-on-change"></td>
						<td><input type="text" name="<?=$searchModelName?>[name]" class="form-control search-on-change"></td>
						<td><input type="text" name="<?=$searchModelName?>[type]" class="form-control search-on-change"></td>
						<td><input type="text" name="<?=$searchModelName?>[weight]" class="form-control search-on-change"></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php //echo $this->render('_table', ['dataProvider'=>$dataProvider, 'pk'=>$searchModel->tableSchema->primaryKey]); ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php ActiveForm::end(); ?>
</div>