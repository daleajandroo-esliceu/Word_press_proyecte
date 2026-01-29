<?php
/* Template Name: Contacto */
get_header();
?>

<div class="container-fluid mt-5">
    <h1>Contacta con nosotros</h1>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo "<p>No hay contenido.</p>";
    endif;
    ?>
</div>

<?php get_footer(); ?>
