<section id="<?php echo get_field('ps_anchor_tag', 'option'); ?>" class="prices">
    <div class="container flex">
    	<?php if( have_rows('ps_section_info_repeter', 'option') ):
    			while ( have_rows('ps_section_info_repeter', 'option') ) : the_row(); ?>
		        <div class="section">
		            <h3><?php echo get_sub_field('ps_heading');?></h3>
		            <?php if (get_sub_field('ps_discount')):?>
		            	<p style="color: #e84545"><span><?php echo get_sub_field('ps_discount');?></span><?php echo get_sub_field('ps_currency');?></p>
		            <?php else:?>
		            	<p><span><?php echo get_sub_field('ps_price');?></span>€</p>
		        	<?php endif;?>
		            <small><?php echo get_sub_field('ps_rate');?></small>
		            <?php if (get_sub_field('ps_discount')):?>
		            	<p class="extra">Akcija! Sena kaina <?php echo get_sub_field('ps_price');?><?php echo get_sub_field('ps_currency');?></p>
		            <?php endif;?>
		            <ul>
		                <?php echo str_replace('p>','li>',get_sub_field('ps_about'));?>
		            </ul>
		        </div>
		        <?php
		    endwhile;
		endif;
		?>
    </div>
</section>