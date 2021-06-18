
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="header">
		<nav class="navbar navbar">
					<div class="navbar-header">
						<h1><a>Перевозки</a></h1>
					</div>
					<div class="top-nav-text">
						
					</div>
					
					
<?php $this->beginBody() ?>
					
					<?php
					NavBar::begin();
					$menuItems = [
						['label' => 'Главная', 'url' => ['/site/index']],
						['label' => 'Контакты', 'url' => ['/site/index1']],
						['label' => 'Услуги', 'url' => ['/site/about']],
						['label' => 'Калькулятор цен', 'url' => ['/site/calc']],
						['label' => 'Грузоперевозки', 'items' => [
							['label' => 'Дачные', 'url' => ['/site/dach']],
							['label' => 'Квартиные', 'url' => ['/sitel/kvart']],
							['label' => 'На дальнее растояние', 'url' =>['/site/dal']],
							]],
					];
					if (Yii::$app->user->isGuest) {
						$menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
						$menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
					} else {
						$menuItems[] = '<li>'
							. Html::beginForm(['/site/logout'], 'post')
							. Html::submitButton(
								'Выход (' . Yii::$app->user->identity->username . ')',
								['class' => 'btn btn-link logout']
							)
							. Html::endForm()
							. '</li>';
					}
					echo Nav::widget([
						'options' => ['class' => 'nav navbar-nav navbar-right'],
						'items' => $menuItems,
					]);
				
					NavBar::end();
					?>
	</ul>
					</div>

					<div class="clearfix"> </div>	
				</nav>
	
    </div>
    <div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
        <?= $content ?>
                               </div>
							</div>
						</div>
					</div>
					</div>
				</div>
            </li>
            <div class="clearfix"></div>
		</div>
	</div>
<!-- Футер -->
	<footer>
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>О нас</h5>
					<p>Мы предоставляем услуги по прямым грузоперевозкам и тд.</p>
					<div class="footer-agileinfo-social">
					</div>
				</div>
				
				<div class="col-md-4 w3-agile-grid">
					<h5>Контактная информация</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
							</div>
							<div class="w3-address-right">
								<h6>Телефон</h6>
								<p>8 922 344 32 42</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
							</div>
							<div class="w3-address-right">
								<h6>Почта</h6>
								<p>Email :<a href="mailto:example@email.com">truck@mail.ru</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
							</div>
							<div class="w3-address-right">
								<h6>Юридический адрес</h6>
								<p> Россия, Ростоввская область. 
								г. Ростов-на-Дону
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Соцсети</h5>
					
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>