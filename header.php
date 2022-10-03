<!DOCTYPE html>
<html lang="es_AR" prefix="og: http://ogp.me/ns#">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<meta property="og:locale" content="es_AR">
	<meta property="og:title" content="<?php if (is_single()) {
											single_post_title('', true);
										} else {
											bloginfo('name');
										}
										?>">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php if (is_single()) {
													echo get_the_excerpt();
												} else {
													bloginfo('description');
												}
												?>">
	<meta property="og:type" content="<?php if (is_single()) {
											echo 'article';
										} else {
											echo 'website';
										}
										?>">
	<meta property="og:image:secure_url" itemprop="image" content="<?php if (has_post_thumbnail()) {
																		the_post_thumbnail_url();
																	} ?>">
	<meta property="og:image" itemprop="image" content="<?php if (has_post_thumbnail()) {
															the_post_thumbnail_url();
														} ?>">
	<?php global $wp; ?>
	<meta property="og:url" content="<?php echo home_url($wp->request); ?>/">
	<meta property="fb:app_id" content="750327386183049">
	<meta property="article:author" content="<?php if (is_single()) {
													if (function_exists('coauthors_posts_links')) {
														global $post;
														$author_id = $post->post_author;
														$i = 0;
														foreach (get_coauthors() as $coauthor) :
															if ($i > 0) {
																echo ', ';
															}
															echo $coauthor->display_name;
															$i++;
														endforeach;
													}
												?><?php } ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<nav class="navbar navbar-expand-lg fondo-azul letra-gris">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo home_url($wp->request); ?>" title="Inicio"><img src='<?php echo get_stylesheet_directory_uri(); ?>/img/adiungs-logo-blanco.png' alt="ADIUNGS - Asociación de
	Docentes e Investigadores de la Universidad Nacional de General	Sarmiento"></a>
			<div class="search-mobile">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
					</svg>
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content buscar">
							<div class="modal-body">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span> </button> <?php wp_nav_menu(array(
																		'menu' => 'Main',
																		'depth' => 3,
																		'menu_class' => 'nav navbar-nav',
																		'container' => 'div',
																		'container_id' => 'navbarSupportedContent',
																		'container_class' => 'collapse navbar-collapse',
																	)); ?>
			<?php get_search_form(); ?>

		</div>
	</nav>