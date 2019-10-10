</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

<div class="copyright container">

<?php get_default_logo_link([
    'name'    => 'logo.svg',
     'options' => [
          'class'  => 'logo-img',
          'width'  => 130,
          'height' => 50,
     ],
]) ?>


<?php
    $email = get_theme_mod('bw_additional_email');
    if (!empty($email)) { ?>
<a href="mailto:<?php echo esc_attr($email); ?>">
    <?php echo esc_html($email); ?>
</a>
<?php } ?>


    <div class="developer">
        <?php _e('Developed by', 'brainworks') ?> <a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a> &copy; <?php echo date('Y'); ?>
    </div>

<?php echo do_shortcode('[bw-phone]'); ?>

<?php echo do_shortcode('[bw-social]'); ?>
</div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
