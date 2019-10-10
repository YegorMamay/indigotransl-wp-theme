<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>

<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						Порядок выполнения проекта
					</div>
				</div>
			</div>
			<div class="row step_items">
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step1.svg" alt="">
						</div>
						<div class="step_title">
							Получение <br> запроса
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step2.svg" alt="">
						</div>
						<div class="step_title">
							Согласование <br> стоимости и сроков
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step3.svg" alt="">
						</div>
						<div class="step_title">
							Допереводческая <br> обработка
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step step_arc step_arc__right">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step4.svg" alt="">
						</div>
						<div class="step_title">
							Перевод
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="step_separator"></div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step step step_arc step_arc__left">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step5.svg" alt="">
						</div>
						<div class="step_title">
							Получение <br> запроса
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step6.svg" alt="">
						</div>
						<div class="step_title">
							Согласование <br> стоимости и сроков
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step7.svg" alt="">
						</div>
						<div class="step_title">
							Допереводческая <br> обработка
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="step step_last">
						<div class="step_img">
							<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/step8.svg" alt="">
						</div>
						<div class="step_title">
							Перевод
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- /.container -->
<?php get_footer(); ?>
