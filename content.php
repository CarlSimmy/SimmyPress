<!-- Markup for content (posts) -->

<div class="blog-post">

  <h2 class="blog-post-title"><?php the_title(); ?></h2> <!-- Post title -->
  <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> <!-- Date & author of the post -->
  <?php the_content(); ?> <!-- Post content -->

</div><!-- /.blog-post -->
