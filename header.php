<!doctype HTML>
<html <?php language_attributes();?>>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,600,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<title><?php wp_title();?></title>
 
 		<?php wp_head(); ?>

	</head>

	<body>
		<header class="menu-header">
			<div class="container flex">
				<div class="header-logo">
					<a href="<?php echo site_url();?>"><img src="<?php echo get_field('ts_main_logo', 'option')["url"]; ?>" alt="<?php bloginfo("name"); ?>"></a>
				</div>
                
				<nav>
                    <div class="toggle">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <?php

					$args = array(
						'theme_location' => 'primary-navigation',
						'menu_class' => 'flex',
						'container' => false
					);

					wp_nav_menu($args);
					?>
				</nav>

					
			</div>
		</header>