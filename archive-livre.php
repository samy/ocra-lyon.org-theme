<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content full">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
		
				
				<div class="entry-content">
					<h2>Bibliothèque</h2>
					<table class="table pure-table pure-table-striped">
						<thead>
							<tr>
								<th>Titre</th>
								<th>Auteurs</th>
								<th>Thématiques</th>
							</tr>
						</thead>
						<tbody>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
						<tr>
							<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							<td>
								<?php
								$auteurs = get_the_term_list(get_the_ID(), 'auteur', '', ', ');
								echo $auteurs;
								?>
							</td>
							<td>
								<?php
								$auteurs = get_the_term_list(get_the_ID(), 'livre_thematique', '', ', ');
								echo $auteurs;
								?>
							</td>
						</tr>
					<?php
					endwhile;
					?>
					</tbody>
					</table>
				</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>