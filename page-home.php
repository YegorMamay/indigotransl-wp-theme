<?php

/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>


<section class="first-screen">
	<div class="first-screen_opacity"></div>
	<div class="container">
		<h1 class="h1 line"><?php the_field('sn_block_title_1'); ?></h1>
		<div class="h1_description"><?php the_field('sn_block_desc_1'); ?></div>
		<div class="text-center">
		<p class="text-white">Сколько это будет стоить?</p>
		<div class="sp-xs-2"></div>
			<button class="btn btn-secondary btn-lg <?php the_lang_class('hero-call-back'); ?>"><?php _e('Рассчитать проект', 'brainworks') ?></button>
		</div>
		<?php if (have_rows('sn_block_advas')) : ?>
			<div class="block-plus">
				<?php while (have_rows('sn_block_advas')) : the_row(); ?>
					<div class="block-plus_item">
						<?php the_sub_field('sn_block_advas_text'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>


<section class="section section-about" id="about">
    <div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>

	<div class="container">
		<h2 class="h2 line"><?php the_field('sn_block_title_2'); ?></h2>
		<div class="h2_description"><?php the_field('sn_block_desc_2'); ?></div>

		<?php if (have_rows('sn_block_abouts')) : ?>
			<div class="block-result">
				<?php while (have_rows('sn_block_abouts')) : the_row(); ?>
					<div class="block-result_item">
						<div class="number line"><?php the_sub_field('sn_block_abouts_title'); ?></div>
						<div class="number_title"><?php the_sub_field('sn_block_abouts_text'); ?></div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>

<section class="section section-about" id="about">
    <div class="container">
		<h2 class="h2 line">Языки, с которыми мы работаем</h2>

    <?php get_template_part('loops/content', 'home'); ?>
	</div>

</section>

<section class="services" id="services">
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>

	<div class="container">
		<div class="row">
			<div class="tabs col-12">
				<div class="tabs__title"><?php the_field('sn_block_tree_title'); ?></div>
				<?php $sn_services = new WP_Query(array('post_type' => 'stylenova_service', 'posts_per_page' => 8)); ?>
				<div class="tab-menu">
					<?php if ($sn_services->have_posts()) : while ($sn_services->have_posts()) : $sn_services->the_post();  ?>
							<div class="tab-menu__item tab-menu__item_<?php the_lang_class('hero-call-back'); ?>">
								<div class="tab-menu__img"><?php the_post_thumbnail('thumbnail', array('class' => 'tab-menu__icon')) ?></div>
								<div class="tab-menu__cont"><span class="title-tab"><?php the_title() ?></span></div>
							</div>
						<?php endwhile ?>
					<?php endif ?>
					<?php wp_reset_postdata(); ?>
				</div>

				<div class="tab-content">
					<?php $unique = 0; ?>
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
											<button class="btn btn-outline-secondary btn-lg btn-unique_<?= ++$unique; ?>">Заказать проект</button>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile ?>
					<?php endif ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>


<section class="section-reviews" id="reviews">
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>

	<div class="container">
		<h2 class="h2 line"><?php the_field('sn_block_fore_title'); ?></h2>
		<?php echo do_shortcode('[bw-reviews]'); ?>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>


<section class="section section-partners" id="partners">
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>

	<div class="container">
		<h2 class="h2 line"><?php the_field('sn_block_5_title'); ?></h2>
		<?php $sn_partners = new WP_Query(array('post_type' => 'stylenova_part', 'posts_per_page' => -1)); ?>
		<div class="slider">
			<?php if ($sn_partners->have_posts()) : while ($sn_partners->have_posts()) : $sn_partners->the_post();  ?>
					<div class="slide">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>


<div class="block-line" style="background-image: url(/wp-content/themes/indigotransl-wp-theme/assets/img/line-bg.jpg);">
	<div class="container">
		<div class="description"><?php the_field('sn_blocks_six_text'); ?></div>
		<a href="#" class="btn btn-secondary btn-lg <?php the_lang_class('serv-order-action'); ?>"><?php _e('Order project', 'brainworks') ?></a>
	</div>
</div>


<section class="section" id="steps">
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<?php the_field('sn_block_7_title'); ?>
				</div>
			</div>
		</div>

		<div class="row step_items">

			<?php if (have_rows('sn_block_7_pv')) : ?>
				<?php while (have_rows('sn_block_7_pv')) : the_row(); ?>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="step">
							<div class="step_img">
								<img src="<?php the_sub_field('sn_block_7_pv_icon'); ?>" alt="">
							</div>
							<div class="step_title">
								<?php the_sub_field('sn_block_7_pv_text'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<div class="col-12 col-xs-12">
				<div class="step_separator"></div>
			</div>

			<?php if (have_rows('sn_block_7_pv_2')) : ?>
				<?php while (have_rows('sn_block_7_pv_2')) : the_row(); ?>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="step">
							<div class="step_img">
								<img src="<?php the_sub_field('sn_block_7_pv_icon'); ?>" alt="">
							</div>
							<div class="step_title">
								<?php the_sub_field('sn_block_7_pv_text'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
    <div class="sp-xs-4"></div>
	<p class="text-center">Самый сложный пункт в жизни каждого проекта - это пункт 7. <br>Пройти его может только идеально выполненный проект без опечаток, неточностей и ошибок другого рода.</p>
	</div>
	
<div class="sp-xs-5sp-sm-5 sp-md-8 sp-lg-8 sp-xl-7"></div>
</section>

<?php get_footer(); ?>