  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <a class="sidebar-link">
      <?php echo _x( '+', 'Open sidebar', 'spun' ); ?>
    </a>
  <?php endif; ?>

  <div id="secondary" class="widget-area" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <?php do_action( 'before_sidebar' ); ?>
      <div class="widget-column one">
        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
