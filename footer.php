    	<section class="footer-top">
    		<div class="footer-top-container flex">
    			<div class="location flex">
    				<h3><?php echo get_field('fs_first_section_heading', 'option'); ?></h3>
    				<p><?php echo get_field('fs_first_section_subtext', 'option'); ?></p>
    			</div>
    			<div class="social flex">
    				<h3><?php echo get_field('fs_social_section_heading', 'option'); ?></h3>
                    <?php
                    if( have_rows('fs_social_icons_repeater', 'option') ): ?>
        				<div class="ico flex">
                            <?php
                            // loop through the rows of data
                            while ( have_rows('fs_social_icons_repeater', 'option') ) : the_row();
                                ?>
            					<a href="<?php echo get_sub_field('fs_social_link')["url"];?>" <?php echo (get_sub_field('fs_social_link')["target"]!='') ? 'target="_blank"' : ''; ?>><i class="fa fa-fw <?php echo get_sub_field('fs_link_icon');?>" aria-hidden="true"></i></a>
                            <?php endwhile;?>
    					</div>
                    <?php endif;?>
    			</div>
    			<div class="about flex">
    				<h3><?php echo get_field('fs_third_section_heading', 'option');?></h3>
    				<p><?php echo get_field('fs_third_section_subtext', 'option');?></p>
    			</div>
    		</div>
    	</section>

    	<section class="footer-bottom">
    		<div class="text">
    			<p>&copy <?php bloginfo("name"); ?></p>
    			<p><?php echo date('Y'); ?></p>
    		</div>
    	</section>

        <?php wp_footer();?>
	</body>
</html>