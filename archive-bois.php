<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sushi_Bar
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <section class="bois-wrapper"> <!-- Remplace "revetements" par "bois" ici -->
            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();
            ?>
			<a href="<?php the_permalink(); ?>" class="bois-card" style="text-decoration: none; color: inherit;"> <!-- Remplace "revetements" par "bois" ici -->
				<?php the_post_thumbnail(); ?>
				<div class="bois-card__content"> <!-- Remplace "revetements" par "bois" ici -->
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
			</a>
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
?>
