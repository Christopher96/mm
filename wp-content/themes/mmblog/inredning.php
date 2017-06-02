<?php
/*
* Template Name: Inredning
*/

$args = array(
		'numberposts' 	=> '5',
		'category_name'	=> 'okategoriserade'
);
$posts = get_posts($args);

get_header();
?>
<div class="jumbotron">
	<span class="title">Inredning</span>
	<p>Irure irure voluptate pariatur eiusmod laboris deserunt amet tempor ad magna velit in commodo elit quis non est et quis elit dolor cupidatat sed nisi. Cillum elit excepteur non laborum <span class="marked">veniam</span> sunt labore dolore ex et fugiat aute non eiusmod sunt excepteur</p>
</div>
<hr/>


<?php if ( $posts ) : foreach ( $posts as $post ) : setup_postdata($post); ?>
	<article>
		<div class="row">
			<div class="col-md-3">
				<?= get_thumbnail("thumbnail"); ?>
			</div>
			<div class="col-md-9">
				<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
					<h1 class="title large">
						<?= the_title(); ?>
					</h1>
				</a>
				<?= the_excerpt(); ?>
				<blockquote>
					<footer>Inlägget publicerades: <cite><?= the_time( get_option( 'date_format' ) ) ?></cite></footer>
				</blockquote>
			</div>

		</div>
	</article>
<?php endforeach; endif; ?>

<?php get_footer(); ?>
