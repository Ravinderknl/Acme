<div class="testimonials-container">
<div class="container">
<div class="row">
<div class="col-sm-12 testimonials-title wow fadeIn">
<h2>Testimonials</h2>
</div>
</div>
<div class="row">
<div class="col-sm-10 col-sm-offset-1 testimonial-list">
<div role="tabpanel">
<!-- Tab panes -->
<div class="tab-content">
<?php
$args = array(  
'post_type' => 'testimonial',
'post_status' => 'publish',
'posts_per_page' => 4, 
// 'orderby’ => 'title', 
// 'order’ => 'ASC', 
);

$loop = new WP_Query( $args ); 
$i=1;
$counter=1;
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<div role="tabpanel" class="tab-pane fade <?php if($counter==1){echo 'in active';}?>" 
	id="<?php echo "tab".$i; ?>">
<div class="testimonial-image">
<?php the_post_thumbnail();?>
</div>
<div class="testimonial-text">
<p>
<?php the_excerpt(); ?><br>
<a href="<?php echo "tab".$i; ?>"><?php the_title(); ?>, <?php echo get_post_meta($post->ID, 'location', true); ?> on <?php the_date(); ?> said</a>
</p>
</div>
</div>
<?php 
$counter++;
$i++;  
endwhile;
wp_reset_postdata(); 
?>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
</li>
<li role="presentation">
<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
</li>
<li role="presentation">
<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
</li>
<li role="presentation">
<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>