<?php
 get_header();
 ?>
 <main class="single <?php if ( has_post_thumbnail() ) {echo 'hasThumbnail';}?>">
 	<div class="destacada"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbDestacadaHome');} ?></div>
		<article class="container-sm containerArticulo">
			<header class="encabezadoArticulo">
				<h2 class="postmetadata numero"><?php the_terms( $post->ID, 'numero', ' ', ', ', ' ' ); ?></h2><h2 class="postmetadata cat"><?php the_category( ', ' ); ?></h2>
				<h1><?php the_title(); ?></h1>
				<h3><?php /*$meta = get_post_meta( get_the_ID(), 'Bajada' ); echo $meta[0];*/ ?></h3>
				<h3><?php the_field('volanta'); ?></h3>
			</header>
			<footer class="metaArticulo">
				<div class="metaAutor">
					<p>Escrita por
					<?php 
						if ( function_exists( 'coauthors_posts_links' ) ) {
						    coauthors_posts_links();
						} else {
						    the_author_posts_link();
						}
					?>
					</p> <?php
						if ( function_exists( 'coauthors_posts_links' ) ) {
					    global $post;
					        $author_id=$post->post_author;
					        foreach( get_coauthors() as $coauthor ): ?>
					            <div class="author-info">
					                <div>
					                    <p class="author-bio">
					                        <?php
											$descripcionAutor = $coauthor->description;
											if ($descripcionAutor){ ?>
											<b><?php echo $coauthor->display_name; ?></b>
											es <?php
											echo $coauthor->description;
											}
										?>

					                    </p><!-- .author-bio -->
					                </div><!-- .author-description -->
					                
					            </div><!-- .author-info -->
					        <?php endforeach;
					}
										?>
				</div>
				<div class="tiempoLectura">
					<p>Tiempo de lectura</p>
					<p> <?php echo do_shortcode ("[read_meter]"); ?></p>
				</div>
				<div class="compartirRedes">
					<p>Compartí esta nota</p>
					<div class="redes">
						<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" title="Compartir en Facebook"><svg xmlns="http://www.w3.org/2000/svg" class="share" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
							  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
							</svg>
						</a>
						<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_permalink()); ?>" title="Compartir en Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="share bi bi-twitter" viewBox="0 0 16 16">
							  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
							</svg>
						</a>
					</div>
				</div>
			</footer>
			<div class="textoArticulo">
				<?php the_content(); ?>
			</div>
		</article>

<?php
 include 'footer.php';
?>

