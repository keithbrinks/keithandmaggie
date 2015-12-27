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

		<section class="gifts clearfix">
			<a class="registery align-left" href="https://www.surlatable.com/registry/viewGiftRegistry.jsp?giftlistId=2001374459372">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/surlatable.jpg" alt="Sure la table" />
			</a>
			<a class="registery align-right" href="http://www.target.com/gift-registry/registry/KuqUTIQ90L79NVvDd5Ma8w">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/target.jpg" alt="Target" />
			</a>
		</section>

	</div>
</div>

<?php get_footer(); ?>
