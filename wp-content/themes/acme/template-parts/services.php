 <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Our Services</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<?php
/**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
        'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        // 'orderby’ => 'title', 
        // 'order’ => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<div class="col-sm-4">
<div class="work wow fadeInUp">
<?php if ( has_post_thumbnail() ) { ?>
 <div class="service-icon">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
 </div>
<?php }?>

<h3><?php the_title();?></h3>
<p><?php the_excerpt(); ?></p>
<a class="big-link-1" href="<?php the_permalink(); ?>">Read more</a>
</div>
</div>
<?php   
endwhile;
wp_reset_postdata(); 
?>
	            	                                 
	            </div>
	        </div>
        </div>