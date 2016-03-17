<?php
get_header();
?>

<!-- main content -->

<main id="main-content">
  <div class="row">

  <!-- main posts loop -->
    <section id="posts" class="col s18">
      <div class="row">

<?php
if( have_posts() ) {
  $index = 1;
  while( have_posts() ) {
    the_post();
?>

      <article <?php post_class('col s6'); ?> id="post-<?php the_id(); ?>">

        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('grid-thumb'); ?></a>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

      </article>
    <?php
    if( $index % 3 == 0 ) {
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

    <div class="col s6">
    <?php get_template_part('partials/main-sidebar'); ?>
    </div>
  </div>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
