<?php
  if ( post_password_required() )
		return;
?>

	<div id="comments-toggle"></div>
	<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'spun' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'spun' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( _x( '<span class="screen-reader-text">&laquo;</span>', 'Previous Comments', 'spun' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( _x( '<span class="screen-reader-text">&raquo;</span>', 'Next Comments', 'spun' ) ); ?></div>
		</nav>
		<?php endif; ?>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'spun_comment' ) ); ?>
		</ol>

	<?php endif;  ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'spun' ); ?></p>
	<?php endif; ?>

	<?php comment_form( array( 'cancel_reply_link' => __( 'x', 'spun' ) ) ); ?>

</div>
