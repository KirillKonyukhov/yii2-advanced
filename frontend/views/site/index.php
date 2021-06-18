<?php

/* @var $this yii\web\View */

$this->title = Yii::$app ->name;
?>
<!-- Контент -->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h2>Прямые перевозки</h2>
								<h4>Большой выбор транспорта</h4>
								<div class="button1">
									<a href="#" data-toggle="modal" data-target="#myModal">Подробнее о транспорте</a>
                                </div>
            <!-- В разработке -->
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										
									</div>
									<div class="col-md-4 grid1">
										
									</div>
									<div class="col-md-4 grid1">
										
									</div>
									<div class="clearfix"></div>
								</div>
                            </div>
             <!-- В разработке -->
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5>Оформить <span>Заявку</span>?</h5>
									<p>Заявка</p>
									<form action="#" method="post">
										<input type="text" class="email" name="name" placeholder="Имя" required="">
										<input type="tel" class="tel" name="tel" placeholder="Телефон" required="">
										<select class="form-control option-w3ls">
												<option>Город отправления</option>
												<option>Москва</option>
												<option>Ростов</option>
												<option>Рязань2</option>
												<option>Пермь</option>
										</select>
										<select class="form-control option-w3ls">
												<option>Город доставки</option>
												<option>Москва</option>
												<option>Ростов</option>
												<option>Рязань</option>
												<option>Пермь</option>
										</select>
										<input type="submit" class="hvr-shutter-in-vertical" value="Отправить">  	
									</form>
								</div>
							</div>
						</div>
					</div>
			   </div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //Контент -->