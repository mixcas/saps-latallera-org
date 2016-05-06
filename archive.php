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
  $index = 1;
  while( have_posts() ) {
    the_post();
    $artists = get_artist($post->ID, '_igv_artists');
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
    if( $index % 4 == 0 ) {
      echo '</div><div class="row">';
    }

    $index++;
    ?>

<?php
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
