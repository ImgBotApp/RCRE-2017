<?php // This is the template for a broker's picture, name, title and link to profile only ?>
	<?php // the div ID is the broker's name with dashes were needed ?>
	<div id="<?php echo sanitize_title_with_dashes( $title ); ?>" class="employee d-1of6 t-1of4 m-1of2">
		
		<?php // Get the link to broker's picture and get alt text ?>
		<img class="broker-profile-picture" src="<?php echo types_render_field( "broker-profile-picture", array( 'raw' => true)); ?>" alt="<?php echo the_title(); ?>">
		
		<?php // Get the broker's name ?>
		<h3><?php echo the_title(); ?></h3>

		<?php // Get broker's title ?>
		<h4><?php echo types_render_field( "broker-title", array( 'raw' => true) ); ?></h4>

		<?php // get the link to the broker's profile page ?>
		<a id="cta-underline-gray" href="<?php echo get_post_permalink(); ?>">View Profile</a>
	</div>