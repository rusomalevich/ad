</main>
<footer class="navbar navbar-expand-lg fondo-azul letra-gris">
    <nav class="navbar navbar-expand-lg fondo-azul letra-gris">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://adiungs.org.ar" title="Ir a la web de ADIUNGS"><img src='<?php echo get_stylesheet_directory_uri(); ?>/img/adiungs-logo-blanco.png' alt="ADIUNGS - Asociación de
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
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>