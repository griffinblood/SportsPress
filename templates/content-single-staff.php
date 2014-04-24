<?php
/**
 * The template for displaying staff content.
 *
 * Override this template by copying it to yourtheme/sportspress/content-single-staff.php
 *
 * @author 		ThemeBoy
 * @package 	SportsPress/Templates
 * @version     0.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
	/**
	 * sportspress_before_single_staff hook
	 */
	 do_action( 'sportspress_before_single_staff' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<?php do_action( 'sportspress_single_staff_content' ); ?>