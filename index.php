<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>

	<body>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/grapefruit-closeup.jpg" />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section>
					<h1><a href="<?php the_permalink(); ?>" title="Click to read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
                        		<!--<p>We are a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
<p>We also make smoothies on the side.</p>-->
				</section>
            
			<?php endwhile; else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</section>

		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>