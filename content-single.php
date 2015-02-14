<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
	</div>

  <footer class="entry-meta">
    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
      <span class="comments-link">
				<a href="#comments-toggle">
          <span class="tail"></span>
          <?php echo comments_number( __( '+', 'spun' ), __( '1', 'spun' ), __( '%', 'spun' ) ); ?>
        </a>
			</span>
    <?php endif; ?>
  </footer>
</article><!-- #post-<?php the_ID(); ?> -->
