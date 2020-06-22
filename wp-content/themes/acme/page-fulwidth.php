<?php
/*
 * Template Name: Page Full Width
 
 */

get_header(); ?>
<?php include('template-parts/TopMenu.php');?>
<div class="page-title-container">
<div class="container">
 <div class="row">
 <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

<?php include(get_template_directory().'/components/page-breadcrumbs.php'); ?>

 </div>
</div>
</div>
</div>

<div id="primary" class="site-content">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
     <?php echo get_the_content(); ?>
    <?php endwhile; // end of the loop. ?>
<?php include('template-parts/testimonial.php');?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>