<?php
    get_header();
?>


<h1>Entradas del Blog</h1>

<?php
// Loop de WordPress
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <div>
        <?php the_excerpt(); ?>
    </div>

<?php
    endwhile;
else :
    echo "<p>No hay entradas.</p>";
endif;
?>

<?php
    get_footer();
?>