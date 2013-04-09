<?php
/**
 * @package SemPress
 * @since SemPress 1.0.0
 */
?>

<article <?php sempress_post_id(); ?> <?php post_class(); ?><?php sempress_blog_itemprop("blogPost"); ?> itemscope itemtype="http://schema.org/BlogPosting">
  <header class="entry-header">
    <?php if ( '' != get_the_post_thumbnail() ) { ?>
    <div class="entry-media">
      <?php the_post_thumbnail( "post-thumbnail", array( "itemprop" => "image" ) ); ?>
		</div>
    <?php } ?>    
    <h1 class="entry-title p-name" itemprop="name"><?php the_title(); ?></h1>

    <div class="entry-meta">
      <?php sempress_posted_on(); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div class="entry-content e-content" itemprop="articleBody description">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sempress' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <?php get_template_part( 'entry', 'footer' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
