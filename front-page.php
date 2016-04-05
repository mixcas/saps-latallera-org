<?php
get_header();
?>

<!-- main content -->

<main id="main-content">
  <div class="row">

  <!-- main posts loop -->
    <section id="posts" class="col s24">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

      <article <?php post_class(); ?> id="post-<?php the_id(); ?>">

        <div class="copy">
          <?php the_content(); ?>
        </div>

      </article>

<?php
  }
} else {
?>
      <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
    </section>

  </div>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
