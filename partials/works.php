<section id="<?php echo get_field('ws_anchor_tag', 'option');?>" class="works">
	<?php if( have_rows('ws_works_repeater', 'option') ): ?>
			<div class="container flex">
				<?php
            	 while ( have_rows('ws_works_repeater', 'option') ) : the_row();
             	?>
					<div class="small-container flex">
						<img src="<?php echo get_sub_field('ws_image', 'option')["url"]; ?>" alt="<?php echo get_sub_field('ws_image', 'option')["alt"]; ?>">
						<h3><?php echo get_sub_field('ws_heading', 'option'); ?></h3>
						<p><?php echo get_sub_field('ws_description', 'option'); ?></p>
					</div>
				<?php endwhile;?>
			</div>
	<?php endif;?>
</section>