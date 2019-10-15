<?php

/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>


<section class="first-screen" style="background-image: url(/wp-content/themes/indigotransl-wp-theme/assets/img/first-bg.jpg);">
	<div class="first-screen_opacity"></div>
	<div class="container">
		<h1 class="h1 line">Бесплатный аудит перевода одного языка на вашем сайте</h1>
		<div class="h1_description">Оставьте нам заявку прямо сейчас, и мы бесплатно проведем аудит вашего сайта</div>
		<div class="text-center">
			<a href="#" class="btn btn-secondary btn-lg">Просчитать проект</a>
		</div>
		<div class="block-plus">
			<div class="block-plus_item">
				Квалифицированные переводчики по каждой тематике
			</div>
			<div class="block-plus_item">
				Гарантия соблюдения форматирования при любом исходном формате документа
			</div>
			<div class="block-plus_item">
				Использование передового лицензированного программного обеспечения для перевода и подготовки и перевода документов
			</div>
		</div>
	</div>
</section>



<section class="section section-about">
	<div class="container">
		<h2 class="h2 line">О нашей компании</h2>
		<div class="h2_description">C помощью этого онлайн-генератора рыботекста можно пачками плодить как отдельные предложения, так и целые абзацы отменнейшего рыбы-текста. А для любителей автоматизации даже реализован API фиштекста.</div>
		<div class="block-result">
			<div class="block-result_item">
				<div class="number line">6</div>
				<div class="number_title">лет успешной работы</div>
			</div>
			<div class="block-result_item">
				<div class="number line">1000+</div>
				<div class="number_title">успешно выполненных проектов</div>
			</div>
			<div class="block-result_item">
				<div class="number line">10000+</div>
				<div class="number_title">слоев переводимых ежедневно</div>
			</div>
			<div class="block-result_item">
				<div class="number line">12+</div>
				<div class="number_title">рабочих языков</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('loops/content', 'home'); ?>


<section class="services">
	<div class="container">
		<div class="row">
			<div class="tabs col-12">
				<div class="tabs__title">Услуги</div>
				<?php $sn_services = new WP_Query(array('post_type' => 'stylenova_service', 'posts_per_page' => 8)); ?>
				<div class="tab-menu">
					<?php if ($sn_services->have_posts()) : while ($sn_services->have_posts()) : $sn_services->the_post();  ?>
							<div class="tab-menu__item">
								<div class="tab-menu__img"><?php the_post_thumbnail('thumbnail', array('class' => 'tab-menu__icon')) ?></div>
								<div class="tab-menu__cont"><span class="title-tab"><?php the_title() ?></span></div>
							</div>
						<?php endwhile ?>
					<?php endif ?>
				</div>

				<div class="tab-content">
					<?php if ($sn_services->have_posts()) : while ($sn_services->have_posts()) : $sn_services->the_post();  ?>
							<div class="tab-content__item">
								<div class="service-info">
									<div class="service-info__left">
										<?php if (have_rows('sn_tab_list_doc')) : ?>
											<ul class="service-list">
												<?php while (have_rows('sn_tab_list_doc')) : the_row(); ?>
													<li class="service-list__item"><?php the_sub_field('sn_tab_list_doc_item'); ?></li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
									<div class="service-info__right">
										<div class="service-industry">
											<div class="service-industry__title">Отрасли:</div>
											<?php if (have_rows('sn_tab_list_industry')) : ?>
												<ul class="industry-list">
													<?php while (have_rows('sn_tab_list_industry')) : the_row(); ?>
														<li class="industry-list__item"><?php the_sub_field('sn_tab_list_industry_item'); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
										</div>
										<div class="wrap-button">
											<a href="<?php the_field('sn_tab_list_link'); ?>" class="btn btn-secondary btn-lg"><?php the_field('sn_tab_list_text_link'); ?></a>
											<button class="btn btn-outline-secondary btn-lg">Заказать проект</button>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-reviews">
	<div class="container">
		<h2 class="h2 line">Отзывы</h2>
		<?php echo do_shortcode('[bw-reviews] '); ?>
	</div>
</section>



<section class="section section-partners">
	<div class="container">
		<h2 class="h2 line">Наши клиенты и партнеры</h2>
		
		<!-- <?php echo do_shortcode('[show-logos]'); ?> -->
		
		<div class="slider">
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
			<div class="slide">
				<img src="/wp-content/themes/indigotransl-wp-theme/assets/img/partners-logo.png" alt="">
			</div>
		</div>
	</div>
</section>


<div class="block-line" style="background-image: url(/wp-content/themes/indigotransl-wp-theme/assets/img/line-bg.jpg);">
	<div class="container">
		<div class="description">При первом заказе скидка 5% вне зависимости от объема</div>
		<a href="#" class="btn btn-secondary btn-lg">Заказать проект</a>
	</div>
</div>


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
			<div class="col-12 col-xs-12">
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


<?php get_footer(); ?>