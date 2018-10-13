<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content full">
		<div id="content" role="main">
			<div style="text-align:right">
				<a href="/bibliotheque">Retour à la bibliothèque</a>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<h2><?php the_title() ;?></h2>

					<div class="single_livre">
						<div class="livre-image">
							<?php echo wp_get_attachment_image(get_field('couverture')['ID'], 'medium'); ?>
						</div>
						<div class="livre-details">
							<?php if (get_field('sous_titre')) : ?>
								<p>
									<?php the_field('sous_titre'); ?>
								</p>
							<?php endif; ?>
							<?php if (get_field('auteur')) : ?>
								<p>
									<strong>Auteurs</strong> : <?php echo get_the_term_list(get_the_ID(), 'auteur', '', ', ') ?>
								</p>
							<?php endif; ?>
							<?php if (get_field('thematique')) : ?>
								<p>
									<strong>Thématiques</strong> : <?php echo get_the_term_list(get_the_ID(), 'livre_thematique', '', ', ') ?>
								</p>
							<?php endif; ?>
							<?php if (get_field('editeur')) : ?>
								<p>
									<strong>Editeur</strong> : <?php echo get_the_term_list(get_the_ID(), 'livre_editeur', '', ', ') ?>
								</p>
							<?php endif; ?>
							<?php if (get_field('collection')) : ?>
								<p>
									<strong>Collection</strong> : <?php the_field('collection'); ?>
								</p>
							<?php endif; ?>
							<?php if (get_field('date_sortie')) : ?>
								<p>
									<strong>Date de sortie</strong> : <?php the_field('date_sortie'); ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>