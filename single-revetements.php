<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

$dataRevetements = get_fields();


get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <section class="revetements-wrapper"> 
            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();
            ?>

            <article class="revetements-card"> 
                <?php the_post_thumbnail(); ?>
                <div class="revetements-card__content"> 
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </div>
            </article>

            <section>
                <h2>Informations revêtements</h2>
                <p>La rapidité : <?= $dataRevetements['rapidité'] ?></p>
                <p>Le contrôle : <?= $dataRevetements['contrôle'] ?></p>
                <p>L'adhérence : <?= $dataRevetements['adhérence'] ?></p>
                <p>L'épaisseur : <?= $dataRevetements['épaisseur'] ?></p>
            </section>

            <?php
            endwhile;
            ?>

        </section>
        <?php

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();
