<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php the_content(); ?>

    <?php wp_link_pages( [
        'before' => '<div class="page-links">',
        'after' => '</div>',
        'link_before' => '<span class="active-link">',
        'link_after' => '</span>'
      ]
    ); ?>
  </div>
</article>