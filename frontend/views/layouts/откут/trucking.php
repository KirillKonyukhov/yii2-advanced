
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
<?php $this->beginBody() ?>


<div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.html">Перевозки</a></h1>
					</div>
					<div class="top-nav-text">
						
					</div>
					<!-- Меню -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center active" href="http://advanced/frontend/web/index.php?r=site%2Findex">Главная</a></li>
							<li><a href="#team" class="hvr-underline-from-center scroll scroll">Контакты</a></li>
							<li><a href="gallery.html" class="hvr-underline-from-center">Услуги и цены</a></li>
							<li><a href="#" data-toggle="dropdown"><span data-hover="ShortCodes">Грузоперевозки</span><span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://advanced/frontend/web/index.php?r=site%2Fsignup"><span data-hover="Icons">Дачные</span></a></li>
                                    <li><a href="http://advanced/frontend/web/index.php?r=site%2Fsignup"><span data-hover="Typograpghy">Квартирные</span></a></li>
                                    <li><a href="http://advanced/frontend/web/index.php?r=site%2Fsignup"><span data-hover="Typograpghy">На дальнее растояние</span></a></li>
								</ul>
							</li>	
                            <li><a href="http://advanced/frontend/web/index.php?r=site%2Fsignup" class="hvr-underline-from-center">Регистрация</a></li>
                            <li><a href="http://advanced/frontend/web/index.php?r=site%2Flogin" class="hvr-underline-from-center">Вход</a></li>
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