<?php get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search %s' ), '<br /><span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'home' ); ?>

				<?php endwhile; ?>

				<?php spun_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</div>
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>