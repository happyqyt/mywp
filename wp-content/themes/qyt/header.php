<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	
<?php require_once("inc/template-tags.php");?>

<body <?php body_class(); ?>>
	<header role="banner" class="siteHeader">
		<div id="menuMain" class="container"><div class="row">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="siteLogo col-xs-3">
				<span class="site-title"><?php bloginfo( 'name' ); ?></span>
				<span>|</span>
				<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<span class="site-description"><?php echo $description; ?></span>
					<?php endif;
				?>
			</a>
			<!-- menu -->
			<?php if ( has_nav_menu( 'headerMenu' ) ) :
				wp_nav_menu( array( 'theme_location' => 'headerMenu', 'container' => 'div', 'container_class' => 'col-xs-9', 'container_id' => 'menuDiv' ) );
			endif;?>

			<?php get_search_form(); ?>
		</div></div>
	</header><!-- .site-header -->

	<main role="main">
		<div id="siteContent" class="container"><div class="row">