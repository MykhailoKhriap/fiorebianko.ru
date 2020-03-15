<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiore_Bianco
 */

get_header();
?>

<section class="offer">
	<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel data-interval="100000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/slaid1.png" class="d-block w-100" alt="...">
					<div class="carousel-caption">
						<h1>
							Заботимся о Вашем здоровье
						</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/img/slaid1.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>
							Заботимся о Вашем здоровье
						</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/img/slaid1.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>
							Заботимся о Вашем здоровье
						</h1>
					</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="trust" id="trust">
	<div class="container">
		<div class="d-flex justify-content-center">
			<h2 class="title_H3 text-center">
				Почему нам доверяют
			</h2>
		</div>
		<div class="trust__dlock d-flex justify-content-around align-items-center flex-wrap">
			<div class="text-center">
				<img src="assets/img/Vector.svg" alt="img">
				<p>
					Привлекательные цены<br>
					Скидки постоянным<br>
					клиентам
				</p>
			</div>
			<div class="text-center trust__dlock_before">
				<img src="assets/img/Vector2.svg" alt="img">
				<p>
					Индивидуальный<br>
					подход к каждому<br>
					клиенту
				</p>
			</div>
			<div class="text-center">
				<img src="assets/img/Vector3.svg" alt="img">
				<p>
					Квалифицированные<br> 
					специалисты с медицинским<br> 
					образованием
				</p>
			</div>
		</div>
	</div>
	
</section>

<section class="consultation" id="consultation">
	<div class="container">
		<div class="d-flex justify-content-center">
			<h2 class="title_H3 text-center">
				Запишитесь на консультацию
			</h2>
		</div>
		<div class="d-flex justify-content-center">
			<form>
				<label class="name">
					<span>Имя</span>
					<input type="text" name="name" placeholder="Имя" class="input_text">
				</label>
				<label class="pfone">
					<span>Телефон</span>
					<input type="text" name="pfone" placeholder="Телефон" class="input_text">
				</label>
				<div class="d-flex justify-content-center">
					<label class="label_checkbox">
						<input type="checkbox" name="name">
						<span>
							Отправляя заявку, вы даете согласие на обработку персональных данных
						</span>	
					</label>
				</div>
				<div class="d-flex justify-content-center">
					<div class="btnDlockRed">
						<a href="#" class="dtnRed">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<section class="cosmetology" id="cosmetology">
	<div class="container">
		<div class="d-flex justify-content-center">
			<h2 class="title_H3 text-center">
				Наши услуги
			</h2>
		</div>
		<div class="d-flex justify-content-between cosmetology__offer">
			<img src="assets/img/Component 1.png" alt="img">
			<div class="cosmetology__offer__h3">
				<h3 class="title_h2">
					Косметология
				</h3>
				<ul>
					<li>Массаж лица (французский 3D)</li>
					<li>Чистка лица (механическая)</li>
					<li>Маска альгинантная</li>
					<li>Маска (по типу кожи)</li>
					<li>Маска гелевая Apriline</li>
					<li>Пилинг</li>
					<li>Мезотерапия лица</li>
					<li>Биоревитализация</li>
					<li>Биорепарация</li>
					<li>Антикуперозная программа (вит. С)</li>
				</ul>
			</div>
		</div>
		<div class="peelings d-flex justify-content-between">
			<div class="peelings__ul">
				<h3>
					Пилинги:
				</h3>
				<ul>
					<li>Химический пилинг</li>
					<li>Салициловый</li>
					<li>Миндальный</li>
					<li>Пировиноградный</li>
					<li>Пилинг Джесснера</li>
					<li>Гликолевый</li>
					<li>Молочный</li>
					<li>Ретиноевый пилинг</li>
				</ul>
			</div>
			<img src="assets/img/Component2.png" alt="img">
		</div>
	</div>
</section>


<section class="massage" id="massage">
	<div class="massage__container">
		<div class="d-flex justify-content-between massage__offer">
			<img src="assets/img/massach.png" alt="img ">
			<div class="massage__offer__h3">
				<h3 class="title_h2">
					Массаж
				</h3>
				<ul>
					<li>Классический массаж общий</li>
					<li>Классический массаж грудного отдела позвоночника</li>
					<li>Классический массаж шеи</li>
					<li>Классический массаж одной конечности</li>
					<li>Сегментный массаж грудного отдела позвоночника</li>
					<li>Сегментный массаж пояснично-крестцового отдела </li>
					<li>позвоночника/позвоночника+нижние конечности
					</li>
					<li>Детский массаж от 3-х месяцев до 1года</li>
					<li>Детский массаж 1-3 года/4-10 лет</li>
					<li>Лечебный массаж 11-14 лет</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="eyelashes" id="eyelashes">
	<div class="container desctop">
		<div class="d-flex justify-content-between">
			<div>
				<h3 class="title_h2">
					Ресницы и брови
				</h3>
				<ul>
					<li>Окрашивание бровей (хной,краской)</li>
					<li>Ламинирование ресниц и бровей</li>
					<li>Наращивание ресниц</li>
				</ul>
				<div class="btnDlockGreen_wind">
					<a href="#" class="dtnRed_wind">ЗАПИСАТЬСЯ НА ПРИЕМ</a>
				</div>
			</div>
			<img src="assets/img/eyelashes.png" alt="eyelashes">
		</div>
	</div>

	<div class="container mobail">
		<div class="d-flex justify-content-center">
			<h3 class="title_h2">
				Ресницы и брови
			</h3>
		</div>
		<div class="img_mobail">
			<img src="assets/img/eyelashes.png" alt="eyelashes">
		</div>
		<div class="d-flex justify-content-center">
			<ul>
				<li>Окрашивание бровей (хной,краской)</li>
				<li>Ламинирование ресниц и бровей</li>
				<li>Наращивание ресниц</li>
			</ul>
		</div>
		<div class="d-flex justify-content-center">
			<div class="btnDlockGreen_wind">
				<a href="#" class="dtnRed_wind">ЗАПИСАТЬСЯ НА ПРИЕМ</a>
			</div>
		</div>	
	</div>
</section>

<section class="laboratory" id="laboratory">
	<div class="laboratory__img">
		<img src="assets/img/photo2.png" alt="photo">
	</div>
	<div class="container">
		<h2>
			Лаборатория здоровья и красоты<br>
			Фиоре Бьянко
		</h2>
		<p>
			Ваше тело чувствует, и в зеркале вы видите, что время можно повернуть вспять.<br> 
			Курс массажа избавляет от боли и возвращает телу легкость, а косметические процедуры стирают с лица усталость и возрастные изменения, делают нас ярче, привлекательнее. И вот уже ощущаешь себя моложе, бодрее, увереннее.  Спасибо достижениям современной науки!  
			На вооружении мастеров Фиоре Бианко исключительно проверенные, бережные, полезные процедуры. Видимые результаты и долговременный эффект — вот в чем ценность профессионального ухода за лицом и телом. Как максимально продлить действие этой магии? Специалисты Фиоре Бианко дают такие рекомендации, ориентируясь на индивидуальные особенности своих клиентов.
		</p>
	</div>
</section>

<section class="reviews" id="reviews">
	<div class="container">
		<div class="d-flex justify-content-center">
			<h2 class="title_H3">
				Отзывы
			</h2>
		</div>
		<p class="title_H3__subtitle text-center">
			Наше главное достижение - довольные клиенты
		</p>
		<div class="swiper-container desctop">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 7.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Елена Валентинова
										</p>
										<span>
											@ elenaval
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 8.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Ольга Реуцкая
										</p>
										<span>
											vk/user1234568
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/vk (2) 1.png" alt="vk">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 9.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Екатерина Рейзвих
										</p>
										<span>
											@ reizvikch_kate
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 7.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Елена Валентинова
										</p>
										<span>
											@ elenaval
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 8.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Ольга Реуцкая
										</p>
										<span>
											vk/user1234568
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/vk (2) 1.png" alt="vk">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 9.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Екатерина Рейзвих
										</p>
										<span>
											@ reizvikch_kate
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 7.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Елена Валентинова
										</p>
										<span>
											@ elenaval
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.png" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 8.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Ольга Реуцкая
										</p>
										<span>
											vk/user1234568
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/vk (2) 1.png" alt="vk">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
							</p>
						</div>
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 9.png" alt="foto">
									<div class="reviews__slaid__head__name">
										<p>
											Екатерина Рейзвих
										</p>
										<span>
											@ reizvikch_kate
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="swiper-container mobail">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 7.png" alt="foto" class="ava">
									<div class="reviews__slaid__head__name">
										<p>
											Елена Валентинова
										</p>
										<span>
											@ elenaval
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram" class="social_slaid">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 7.png" alt="foto" class="ava">
									<div class="reviews__slaid__head__name">
										<p>
											Елена Валентинова
										</p>
										<span>
											@ elenaval
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/instagram.svg" alt="instagram" class="social_slaid">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="reviews__slaid d-flex justify-content-around">
						<div class="reviews__slaid_div">
							<div class="reviews__slaid__head d-flex justify-content-between">
								<div class="d-flex">
									<img src="assets/img/Ellipse 8.png" alt="foto" class="ava">
									<div class="reviews__slaid__head__name">
										<p>
											Ольга Реуцкая
										</p>
										<span>
											vk/user1234568
										</span>
									</div>
								</div>
								<div>
									<img src="assets/img/vk (2) 1.png" alt="vk" class="social_slaid">
								</div>	
							</div>
							<p class="reviews__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>

<section class="sectionForm" id="sectionForm">
	<div class="container">
		<div class="d-flex justify-content-center">
			<h2 class="title_H3">
				Записаться на прием
			</h2>
		</div>	
			<div class="payment__Form d-flex justify-content-around">
				<div class="payment__blok">
					<div class="payment">
						<h4 class="text-center">
							Удобная оплата
						</h4>
						<div class="d-flex justify-content-around align-items-center">
							<div class="text-center">
								<img src="assets/img/koshelek.png" alt="">
								<p>
									Наличные
								</p>
							</div>
							<div class="text-center">
								<img src="assets/img/Group311.png" alt="">
								<p>
									Карта
								</p>
							</div>
							<div class="text-center">
								<img src="assets/img/logobar-paypass.png" alt="">
								<p>
									PayPass
								</p>
							</div>
						</div>
						<h4 class="text-center">
							Для юридических лиц
						</h4>
						<div class="d-flex justify-content-center align-items-center">
							<img src="assets/img/kisspng-credit.png" alt="">
							<span>Безналичная оплата</span>
						</div>
					</div>
				</div>
				<form id="form2">
					<label class="name">
						<span>Имя</span>
						<input type="text" name="name" placeholder="Имя" class="input_text">
					</label>
					<label class="pfone">
						<span>Телефон</span>
						<input type="text" name="pfone" placeholder="Телефон" class="input_text">
					</label>
					<div class="d-flex justify-content-center">
						<label class="label_checkbox">
							<input type="checkbox" name="checkbox" >
							<span>
								Отправляя заявку, вы даете согласие на обработку персональных данных
							</span>	
						</label>
					</div>
					<div class="d-flex justify-content-center">
						<div class="btnDlockRed">
							<a href="#" class="dtnRed">ЗАПИСАТЬСЯ НА ПРИЕМ</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
