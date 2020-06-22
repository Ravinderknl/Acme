<?php get_header(); ?>
<body <?php body_class(); ?>>  
<input type="hidden" id="admin_url" value="<?php echo admin_url( 'admin-ajax.php' ) ?>">   
<section class="register-form">
<!-- <form action="#"> -->
<div class="container step1">
<div class="register-form-block">	
<div class="form-step-sidebar">
<img src="<?php echo get_template_directory_uri()?>./assets/img/logo.png" class="logo"/>
<ul class="nav-sidebar">
	<li><a class="active"><span class="list-ico">1</span>Create your account</a></li>
	<li><a class="inactive_tab"><span class="list-ico">2</span>Setup your team</a></li>
	<li><a class="inactive_tab"><span class="list-ico">3</span>Verify your email address</a></li>

</ul>
<img src="<?php echo get_template_directory_uri()?>./assets/img/header.png" class="footer-img">
</div>
<div class="form-step-content">
	<div class="tag-name">
		STEP 1
	</div>
<h2 class="title">Lets get your details.</h2>

  <div class="form-group">
    <label for="name">What is your name? </label>
    <input type="text" class="form-control" id="name" placeholder="Name">
   
  </div>
  <div class="form-group">
    <label for="email">What is your email address?</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
   
  </div>
 <div class="form-group">
    <label for="password">Create a password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password">
    <sub>Min 6 characters and atleast one letter and one number</sub>

  </div>
  <button class="btn-continue" id="step1_btn">Continue</button>

</div>
</div>
</div>

<div class="container step2 step-inactive">
<div class="register-form-block">	
<div class="form-step-sidebar">
<img src="<?php echo get_template_directory_uri()?>./assets/img/logo.png" class="logo"/>
<ul class="nav-sidebar">
	<li><a><span class="list-ico blu-box"><img src="<?php echo get_template_directory_uri()?>./assets/img/Vector.png" class="tick-ico"/></span>Create your account</a></li>
	<li><a class="active"><span class="list-ico">2</span>Setup your team</a></li>
	<li><a><span class="list-ico">3</span>Verify your email address</a></li>

</ul>
<img src="<?php echo get_template_directory_uri()?>./assets/img/header.png" class="footer-img">
</div>
<div class="form-step-content">
	<div class="tag-name">
		STEP 2
	</div>
<h2 class="title">Now tell us about your team.</h2>

  <div class="form-group">
    <label for="name">What is the name of the business? </label>
    <input type="text" class="form-control" id="tname" placeholder="Optimum Contractors">
  </div>
  <div class="form-group">
    <label for="team">What is your role in the business?</label>
    <select class="form-control" id="team_role">
    	<option value="Director">Director</option>
    	<option value="Contracts Manager">Contracts Manager</option>
    	<option value="Quality Manager">Quality Manager</option>
    	<option value="Quantity Surveyor">Quantity Surveyor</option>
    	<option value="Site Agent">Site Agent</option>
    	<option value="Operative">Operative</option>
    </select>
  </div>
 <div class="form-group">
    <label for="password">How many employees do you have?</label>
    <select class="form-control" id="team_size">
    	<option value="">No. of employees</option>
    	<option value="1-10 Employees">1-10 Employees</option>
    	<option value="11-20 Employees">11-20 Employees</option>
    	<option value="21-50 Employees">21-50 Employees</option>
    	<option value="51-100 Employees">51-100 Employees</option>
    	<option value="100+ Employees">100+ Employees</option>
    </select>
  </div>
  <button class="btn-continue" id="step2_btn">Continue</button>

</div>
</div>
</div>


<div class="container step3 step-inactive">
<div class="register-form-block">	
<div class="form-step-sidebar">
<img src="<?php echo get_template_directory_uri()?>./assets/img/logo.png" class="logo"/>
<ul class="nav-sidebar">
	<li><a href="#"><span class="list-ico blu-box"><img src="<?php echo get_template_directory_uri()?>./assets/img/Vector.png" class="tick-ico"/></span>Create your account</a></li>
	<li><a href="#" ><span class="list-ico blu-box"><img src="<?php echo get_template_directory_uri()?>./assets/img/Vector.png" class="tick-ico"/></span>Setup your team</a></li>
	<li><a href="#" class="active"><span class="list-ico">3</span>Verify your email address</a></li>

</ul>
<img src="<?php echo get_template_directory_uri()?>./assets/img/header.png" class="footer-img">
</div>
<div class="form-step-content">
	<div class="tag-name">
		STEP 3
	</div>
<h2 class="title">Please check your email.</h2>
<p>Confirm your email address to start your onboarding. If you do not receive it right away, please check your spam folder.</p>
<img src="<?php echo get_template_directory_uri()?>./assets/img/mail-list.png" class="email-content">
</div>
</div>
</div>
<!-- </form> -->
</section>

<!-- Footer -->
<?php get_footer(); ?>