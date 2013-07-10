<?php
/**
 * THIS PAGE HAS SUCCESSFULLY DELETED THE SIDE BAR. SIDE BARS ARE STUPID. 
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>

<div id="logodiv">
	<a href="http://www.missmarymorgan.com"></a>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

