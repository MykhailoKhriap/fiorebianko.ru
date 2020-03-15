<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fiore_Bianco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:700i&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header" id="header">
	<div class="container">
		<nav class="menu">
			<div class="logo">
				<a href="#">
					<img src="assets/img/logo.svg" alt="logo">
				</a>
			</div>
			<ul>
				<li>
					<a href="#cosmetology">КОСМЕТОЛОГИЯ</a>
				</li>
				<li>
					<a href="#massage">МАССАЖ</a>
				</li>
				<li>
					<a href="#eyelashes">РЕСНИЦЫ</a>
				</li>
				<li>
					<a href="#eyelashes">БРОВИ</a>
				</li>
				<li>
					<a href="#menuitem">О НАС</a>
				</li>
				<li>
					<a href="#reviews">ОТЗЫВЫ</a>
				</li>
				<li>
					<a href="#footer">КОНТАКТЫ</a>
				</li>
			</ul>
			<div class="menu__contact">
				<a href="tel:+79153084020">+ 7 (915) 308 40 20</a>
				<a href="tel:+74957775844">+ 7 (495) 777 58 44</a>
			</div>
			<div class="btnDlockGreen">
				<a href="#form2" class="dtnGreen">ЗАКАЗАТЬ ЗВОНОК</a>
			</div>
			<div class="social">
				<span>Мы в соцсетях</span>
				<a href="https://instagram.com/fiorebianko?igshid=18e7qvpxjs2t4">
					<img src="assets/img/instagram.svg" alt="insta">
				</a>
				<a href="#">
					<img src="assets/img/Group.svg" alt="wa">
				</a>				
			</div>
		</nav>
		<nav class="menu_mobail container">
			<div class="d-flex justify-content-between w-100 align-items-center">
				<div class="logo">
					<img src="assets/img/logo.svg" alt="assets">
				</div>
				<div class="social__mobail">
					<a href="#">
						<img src="assets/img/phone1.svg" alt="phone">
					</a>
					<a href="#">
						<img src="assets/img/instagram.svg" alt="insta" class="instagram">
					</a>
					<a href="#">
						<img src="assets/img/Group.svg" alt="wa" class="wcacap">
					</a>		
				</div>
				<div class="overlay">
					<div class="overlayMenu">  
						<ul role="menu">
							<li><a href="#cosmetology" role="menuitem">КОСМЕТОЛОГИЯ</a></li>
							<li><a href="#massage" role="menuitem">МАССАЖ</a></li>
							<li><a href="#eyelashes" role="menuitem">РЕСНИЦЫ</a></li>
							<li><a href="#eyelashes" role="menuitem">БРОВИ</a></li>
							<li><a href="#reviews" role="menuitem">ОТЗЫВЫ</a></li>
							<li><a href="#footer" role="menuitem">КОНТАКТЫ</a></li>
							<li><a href="#laboratory" role="menuitem">О ЦЕНТРЕ</a></li>
							<li><a href="#form2" role="menuitem">ЗАКАЗАТЬ ЗВОНОК</a></li>
						</ul>
					</div>
				</div>

				<div class="navBurger" role="navigation" id="navToggle">
					
				</div>
			</div>
		</nav>
	</div>
</header>