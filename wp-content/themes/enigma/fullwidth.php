<?php //Template Name:Full-Width Page
get_header(); 
?>
<div class="container">
	<div class="row enigma_blog_wrapper">
	<div class="col-md-12">
	<?php get_template_part('post','page'); ?>
	</div>
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<div class="enigma_callout_area">
		<div class="container">
			<div class="row">
			<?php if($wl_theme_options['fc_title'] !='') { ?>
				<div class="col-md-9">
				<p><?php if($wl_theme_options['fc_icon'] !='') { ?><i class="<?php echo esc_attr($wl_theme_options['fc_icon']);?>"></i><?php } ?><?php echo esc_attr($wl_theme_options['fc_title']);?></p>
				</div>
				<?php } ?>
				<?php if($wl_theme_options['fc_btn_txt'] !='') { ?>
				<div class="col-md-3">
				<a href="<?php echo esc_url($wl_theme_options['fc_btn_link']); ?>" class="enigma_callout_btn"><?php echo esc_attr($wl_theme_options['fc_btn_txt']); ?></a>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="enigma_callout_shadow"></div>
	</div>
	</div>
</div>	
<?php get_footer(); ?>