<section id="<?php echo get_field('bb_anchor_tag', 'option');?>" class="download">
    <div class="container flex">
    	<h2><?php echo get_field('bb_section_heading', 'option');?></h2>
    	<h3><?php echo get_field('bb_section_subtext', 'option');?></h3>
    	<a class="download-button" href="<?php echo get_field('bb_section_button', 'option')['url']; ?>" target="<?php echo get_field('bb_section_button', 'option')['target'];?>"><?php echo get_field('bb_section_button', 'option')['title'];?></a>
   	</div>
</section>