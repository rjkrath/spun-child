<?php get_header(); ?>

<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">

    <?php if ( is_home() && ! is_paged() ) : ?>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'home' ); ?>
      <?php endwhile; ?>

      <?php spun_content_nav( 'nav-below' ); ?>

    <?php elseif ( current_user_can( 'edit_posts' ) ) : ?>
      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>