<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content" role="main">

  <?php stormbringer_breadcrumb();?>

    <?php
      /* No results */
      get_template_part( 'content', 'none' );
    ?>

</div>
<!-- /#content -->

<?php get_footer(); ?>
