<?php get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
        <header class="archive-header">
          <h1 class="page-title">
            <span>
            <?php
              if ( is_category() ) {
                single_cat_title( '', true );

              } elseif ( is_tag() ) {
                single_tag_title( '', true );

              } elseif ( is_day() ) {
                the_date();

              } elseif ( is_month() ) {
                the_date( 'F Y' );

              } elseif ( is_year() ) {
                the_date( 'Y' );

              } else {
                printf('Archives');
              }
            ?>
            </span>
          </h1>
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