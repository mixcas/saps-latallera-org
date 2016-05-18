<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

  <!-- main posts loop -->
    <section id="posts" class="grid">

      <div class="row">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
    $artists = get_artist($post->ID, '_igv_artists');
    $current = get_post_meta($post->ID, '_igv_current');

    if ( $current ) {
?>
      <article <?php post_class('current-exhibition row'); ?> id="post-<?php the_id(); ?>">

        <div class="col s1"></div>
        <div class="col s10"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('grid-current-thumb'); ?></a></div>
        <div class="col s12">
          <span class="current-mark"><?php echo __('[:es]Exhibición Actual[:en]Current Exhibition[:]'); ?>:</span>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <?php if ( !empty($artists) ) { ?>
          <p class="artists">
        <?php echo $artists; ?>
          </p>
      <?php } ?>
        <?php the_excerpt(); ?>
        </div>
        <div class="col s1"></div>

      </article>
    </div>
    <div class="row">
<?php
    } else { 
?>

      <article <?php post_class('col s6'); ?> id="post-<?php the_id(); ?>">

        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('grid-thumb'); ?></a>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <?php if ( !empty($artists) ) { ?>
        <p class="artists">
      <?php echo $artists; ?>
        </p>
    <?php } ?>

      </article>
<?php
    }
  }
} else {
?>
      <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
      </div>
  <?php get_template_part('partials/pagination'); ?>
    </section>


<!-- end main-content -->

</main>

<?php
get_footer();
?>
