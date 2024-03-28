<!-- single.php utilizzato per la pagina dell'articolo -->

<?php get_header(); ?>



<main class="container">

    <h1><?php bloginfo('title'); ?></h1>

    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

    <article>

        <?php
                                    // Mostra l'immagine in evidenza se esiste
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full'); // Puoi specificare la dimensione dell'immagine qui
                                    }
        ?>

        <h3><?php the_title(); ?></h3>

        <?php the_time('j M , Y') ?>

        <?php the_content(esc_html__('Read More...', 'suite_theme')); ?>

    </article>

<?php endwhile; ?>

<?php else : ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug_theme'); ?></p>

<?php endif; ?>

</main>

<?php get_footer(); ?>