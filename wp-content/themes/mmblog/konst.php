<?php
/*
* Template Name: Konst
*/

$args = array(
		'numberposts' 	=> '5',
		'category_name' => 'art',
);
$posts = get_posts($args);

get_header();
?>
<div class="jumbotron">
	<h3 class="title">Rubrik</h3>
	<p>Cillum elit non laborum irure irure voluptate pariatur eiusmod <span class="marked">laboris</span> deserunt amet tempor ad magna velit in commodo elit quis non est et quis elit dolor cupidatat sed nisi veniam sunt labore dolore ex et fugiat aute non eiusmod sunt excepteur</p>
</div>
<hr/>
<div class="flexbin">
	<?php if ( $posts ) : foreach ( $posts as $post ) : setup_postdata($post); ?>
		<a href="<?php the_post_thumbnail_url('full'); ?>" data-lightbox="images" data-title="<span class='title medium'><?php the_title() ?></span><?= the_excerpt(); ?>">
			<?php the_post_thumbnail("medium"); ?>
		</a>
	<?php endforeach; endif; ?>
</div>
<?php get_footer(); ?>
