<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WP Profile
 */

if (!function_exists( 'wp_profile_comment' ) ) :
// Template for comments and pingbacks.
function wp_profile_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'wp-profile' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'wp-profile' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>">
			<footer class="clearfix comment-head">
            
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 50 ); ?>
					<?php printf( __( '%s', 'wp-profile' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'wp-profile' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>                    
					<?php edit_comment_link( __( '(Edit)', 'wp-profile' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content">
            	<?php if ( $comment->comment_approved == '0' ) : ?>
					<h6><em><?php _e( 'Your comment is awaiting moderation.', 'wp-profile' ); ?></em></h6>
					<br />
				<?php endif; ?>
				<?php comment_text(); ?>
                <span class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    </span><!-- .reply -->
            </div>

			
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif;
//end Template for comments


if (!function_exists( 'wp_profile_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function wp_profile_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'wp-profile' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'wp-profile' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'wp-profile' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if (!function_exists( 'wp_profile_post_nav' ) ) {
/**
 * Display navigation to next/previous post when applicable.
 */
function wp_profile_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="nav-links row">
			<?php
				previous_post_link( '<div class="nav-previous col-md-6">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'wp-profile' ) );
				next_post_link(     '<div class="nav-next col-md-6">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'wp-profile' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
}

if (!function_exists( 'wp_profile_posted_on' ) ) {
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wp_profile_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date('Y/m/d') ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '%s', 'post date', 'wp-profile' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><i class="fa fa-clock-o"></i>' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( ' %s', 'post author', 'wp-profile' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fa fa-user fa-6"></i>' . esc_html( get_the_author() ) . '</a></span>'
	);

	//echo '<span class="posted-on">' . $byline . '</span><span class="byline"> ' . $posted_on . '</span>';
	echo '<ul class="featured-items">';
	echo '<li><div class="tag-container"><span class="byline">' . $posted_on . '</span></div></li>';
	echo '<li><div class="tag-container"><span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fa fa-user fa-6"> </i>'. esc_html( get_the_author() ) .'</a></span></div></li>';
	echo '<li><div class="tag-container"><span class="post-comments"><a href="#comments"><i class="fa fa-comments-o"></i>' . get_comments_number() .'</a></spa></div></li>';
	echo '</ul>';	 
	

}
}

if (!function_exists( 'wp_profile_entry_footer' ) ) {
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function wp_profile_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'wp-profile' ) );
		if ( $categories_list && wp_profile_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'wp-profile' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'wp-profile' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'wp-profile' ) . '</span>', $tags_list );
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'wp-profile' ), __( '1 Comment', 'wp-profile' ), __( '% Comments', 'wp-profile' ) );
		echo '</span>';
	}

	edit_post_link( __( 'Edit', 'wp-profile' ), '<span class="edit-link">', '</span>' );
}
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function wp_profile_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'wp_profile_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'wp_profile_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wp_profile_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wp_profile_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in wp_profile_categorized_blog.
 */
function wp_profile_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'wp_profile_categories' );
}
add_action( 'edit_category', 'wp_profile_category_transient_flusher' );
add_action( 'save_post',     'wp_profile_category_transient_flusher' );
