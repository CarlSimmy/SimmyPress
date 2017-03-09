<!-- Markup for index pages, if no other markup fits this is the one that
     it will always revert to. Read more about the WP hierarchy below.
     https://developer.wordpress.org/themes/basics/template-hierarchy/ -->

<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <!-- The loop. Fetching all posts -->
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

      endwhile; endif;
      ?>

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>
