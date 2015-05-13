<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">

		<?php $email_title = get_field('email_title'); ?>
		<title><?php if ($email_title): echo $email_title; else: the_title(); endif; ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php 
			if (is_single()):
				$style = file_get_contents(get_stylesheet_directory_uri() . '/library/css/style.css'); ?>

				<style>
				<?php echo $style; ?>
				</style>
		<?php 
			endif; ?>

	</head>

	<body <?php body_class(); ?>>