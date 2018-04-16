<?php if( have_rows('gs_gallery_image', 'option') ): ?>
    <section id="<?php echo get_field('gs_anchor_tag', 'option');?>" class="examples"> 
    		<div class="container flex">
                <?php
                    while ( have_rows('gs_gallery_image', 'option') ) : the_row();
                    ?>
    			        <div class="img-background">
    				        <img src="<?php echo get_sub_field('gs_image', 'option')["url"]; ?>" alt="<?php echo get_sub_field('gs_image', 'option')["alt"]; ?>"">
    			        </div>
                    <?php endwhile;?>
    		</div>
    </section>
<?php endif;?>