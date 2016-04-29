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
    $artists  = get_post_meta( get_the_ID(), '_igv_artists', true );

?>

      <article <?php post_class(); ?> id="post-<?php the_id(); ?>">

      <h1><?php the_title(); ?></h1>

      <div class="copy">
        <?php the_post_thumbnail() ?>
        <h3><?php echo $artists; ?></h3>
        <?php the_content(); ?>
      </div>

        <footer>
      <?php
      $saps_cat = get_category_by_slug('saps');
      $tallera_cat = get_category_by_slug('la-tallera');

      $cat = get_the_category();
      $cat = $cat[0];

      if ( cat_is_ancestor_of($saps_cat, $cat) ) {
        $section = "Sala de Arte Público Siqueiros";
        $visit_link = get_permalink( get_page_by_path('visitanos-saps') );
      } else if ( cat_is_ancestor_of($tallera_cat, $cat) ) {
        $section = "La Tallera";
        $visit_link = geT_permalink( get_page_by_path('visitanos-la-tallera') );
      }
      ?>
        <p><?php echo $section; ?>: <a href="<?php echo $visit_link; ?>">Cómo llegar</a> | <a href="<?php echo $visit_link; ?>">Horarios</a></p>
        </footer>
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
