<section id="<?php echo get_field('rs_anchor_tag', 'option');?>" class="review">
    <?php if( have_rows('rs_review_repeater', 'option') ): ?>
    		<div class="container flex">
    			<div class="review-img" style="background-image: url('<?php echo get_field('rs_review_image', 'option');?>')">
    			</div>
    			<div class="bandomSlick">
                    <?php
                    while ( have_rows('rs_review_repeater', 'option') ) : the_row();
                    ?>
    				    <div class="review-container flex">
    					   <p><?php echo get_sub_field('rs_review_text', 'option'); ?></p>
    					   <h3><?php echo get_sub_field('rs_author', 'option');?></h3>
    				    </div>
                    <?php endwhile;?>
    			</div>
    		</div>
    <?php endif;?>
</section>