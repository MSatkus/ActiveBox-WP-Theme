<section class="social-icons">
	<?php if( have_rows('si_social_icons_repeater', 'option') ): ?>
		<div class="social-container">
			 <?php
             while ( have_rows('si_social_icons_repeater', 'option') ) : the_row();
             ?>
             	<!-- <?php var_dump(get_sub_field('si_icon')); ?> -->
	   			<a href="<?php echo get_sub_field('si_icon_link')["url"]; ?>" <?php echo (get_sub_field('si_icon_link')["target"]!='') ? 'target="_blank"' : ''; ?>><img src="<?php echo get_sub_field('si_icon')["url"];?>"></a>
	   		<?php endwhile;?>
		</div>
	<?php endif;?>
</section>