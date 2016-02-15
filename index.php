<?php
get_header();
?>

<!-- main content -->

<main id="main-content">
  <div class="row">

  <!-- main posts loop -->
    <section id="posts" class="col s18">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

      <article <?php post_class(); ?> id="post-<?php the_id(); ?>">

        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

      <?php the_content(); ?>

      </article>

<?php
  }
} else {
?>
      <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
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
