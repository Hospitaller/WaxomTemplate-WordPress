<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StartupWeb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
        <div class="header_top_wraper">
            <div class="logo" role="banner"> <a href="/"><img src='<?php echo get_template_directory_uri()?>/assets/img/logo.png' alt="Altarix teemplate Logo"></a></div>
            <div class="logo_name"><?php bloginfo('name');?></div>
            <nav class="nav_main">
				<?php
				wp_nav_menu( array(
				'theme_location' => 'MainMenu',
				'menu_id'        => 'header-menu',
				) );
			?>
			</nav>
            <div class="menu_icon">
                <div class="icon_cart"></div>
                <div class="icon_search" role="search"></div>

            </div>
        </div>
		<!-- /.header_top_wraper -->
		
				<?php
					$query = new WP_Query('cat=8'); // IndexPageTitlePost category
					if( $query->have_posts() ){
						while( $query->have_posts() ){ $query->the_post();
						?>
						<?php the_content(); ?>
						<?php
						}
						wp_reset_postdata(); // reset $post
					} 
					else echo 'Записей нет.';
				?>

        <!-- /.header_mid_wraper -->
        <div class="header_btn_wraper">
        <!-- /.header_mid_wraper -->
</header>


 