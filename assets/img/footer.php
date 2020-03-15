<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fiore_Bianco
 */

?>

<footer class="footer" id="footer">
	<div class="container">
		<div class="footer__offer d-flex justify-content-between">
			<div class="logo">
				<a href="#header">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
				</a>
				
			</div>
			<div class="munu_foot d-flex">
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
				</ul>
				</div>
				<div class="munu_foot d-flex">
				<ul>
					<li>
						<a href="laboratory">О ЦЕНТРЕ</a>
					</li>
					<li>
						<a href="#reviews">ОТЗЫВЫ</a>
					</li>
					<li>
						<a href="#footer">КОНТАКТЫ</a>
					</li>
					<li class="mobail">
						<a href="consultation">ЗАКАЗАТЬ ЗВОНОК</a>
					</li>
				</ul>
			</div>
			<div class="social_foot text-center">
				<p>Мы в соцсетях</p>
				<div class="d-flex justify-content-center">
					<a href="" class="insta_head">

					</a>
					<a href="" class="wacap_head">

					</a>
				</div>
			</div>
			<div class="contact_foot text-center">
				<p>
					г. Реутов, Юбилейный Проспект, д.30/2
				</p>
				<p>
					График работы: пн-вс с 10:00 до 21:00
				</p>
				<a href="">
					 + 7 (915) 308 40 20
				</a>
				<a href="">
					 + 7 (495) 777 58 44
				</a>
			</div>
		</div>
	</div>
</footer>
	

<?php wp_footer(); ?>
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	</script>	
</body>
</html>
