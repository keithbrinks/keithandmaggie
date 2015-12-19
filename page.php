<?php get_header() ?>

<div class="page-container">
	<div class="content">

		<header class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>

	</div>
</div>

<?php get_footer(); ?>
