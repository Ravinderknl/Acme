<?php
/*
 * Template Name: Custom Full Width
 */

get_header(); ?>
<?php include(get_template_directory().'/template-parts/TopMenu.php'); ?>
<div class="page-title-container">
<div class="container">
 <div class="row">
 <div class="col-sm-12 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

<?php include(get_template_directory().'/components/page-breadcrumbs.php'); ?>

 </div>
</div>
</div>
</div>


<div class="contact-us-container">
<div class="container">
<div class="row">
<div class="col-sm-7 contact-form wow fadeInLeft">
<?php while ( have_posts() ) : the_post(); ?>
     <?php echo get_the_content(); ?>
    
<?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]');?>
 <?php endwhile; // end of the loop. ?>   
</div>
<div class="col-sm-5 contact-address wow fadeInUp">
<h3>We Are Here</h3>
<div class="map"></div>
<i class="fa fa-map-marker"></i>  Address: Suite 14 "Ocean Central" 2 Ocean Street,Maroochydore, QLD,<br><br> 4558, Australia<br><br>

<i class="fa fa-phone"></i> Phone: +61 432 165 452

</div>
</div>
</div>
</div>

<?php get_footer(); ?>