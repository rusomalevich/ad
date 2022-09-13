<?php
get_header();

?>

<main class="container-xxl">

    <?php if ((bool) get_the_author_meta('description') || post_type_supports(get_post_type(), 'author')) : ?>
        <div class="author-bio <?php echo get_option('show_avatars') ? 'show-avatars' : ''; ?>">
            <div class="author-bio-content">
                <?php echo get_avatar(get_the_author_meta('ID'), '85'); ?>
                <h2 class="author-title">
                    <?php
                    printf(
                        /* translators: %s: Author name. */
                        get_the_author()
                    );
                    ?>
                </h2>
                <p class="author-description"> <?php the_author_meta('description'); ?></p><!-- .author-description -->
                Publicó los siguientes artículos
            </div><!-- .author-bio-content -->
        </div><!-- .author-bio -->
    <?php endif; ?>

    <div class="articulosHome">
        <div class="row mb-3 text-center grilla">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="col-md-4 themed-grid-col">
                        <h3 class="postmetadata"><?php the_category(', '); ?></h3>
                        <h2 class="tituloNota"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                        <?php
                        add_filter('the_author_posts_link', function ($link) {
                            return str_replace('rel="author"', 'rel="author" class="autor"', $link);
                        });
                        ?>
                        <p>Por <?php
                                if (function_exists('coauthors_posts_links')) {
                                    coauthors_posts_links();
                                } else {
                                    the_author_posts_link();
                                }
                                ?></p>
                    </article>
                <?php endwhile;
            else : ?>
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php esc_html_e('No se encontraron artículos de este número'); ?></p>

                <!-- REALLY stop The Loop. -->
            <?php endif; ?>
        </div>
    </div>
    <?php

    include 'footer.php';
    ?>