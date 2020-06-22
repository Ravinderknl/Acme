<?php 
function acme_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'alldone-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'bootstrap-style',  get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'acme_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function acme_register_scripts() {
   wp_localize_script( 'my_voter_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));     
   wp_enqueue_script( 'my_voter_script' );
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.js', array(), $theme_version, false );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), $theme_version, false );
	wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, false );
$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
wp_localize_script( 'scripts-js', 'directory_uri', $wnm_custom );
}
add_action( 'wp_enqueue_scripts', 'acme_register_scripts' );
/*ajaxcall*/
add_action('wp_ajax_register_data','register_data');
add_action('wp_ajax_priv_register_data','register_data');
function register_data(){
global $wpdb;
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$tname=$_POST['tname'];
$trole=$_POST['teamrole'];
$tsize=$_POST['teamsize'];
$email_ex = email_exists( $email );
$user_ex=username_exists($name);
if ( $email_ex or $user_ex) {
    echo "That E-mail or Username is already register";
} else {
$userdata = array(
'user_login'       =>  $name,
'user_pass'        =>  md5($password),
'user_email'       =>  $email
);
$user_id = wp_insert_user( $userdata );
if ( ! is_wp_error( $user_id ) ) {
echo "User created : ". $user_id;
    update_user_meta($user_id, 'Team_name', $tname);
    update_user_meta($user_id, 'role', $trole);
    update_user_meta($user_id, 'Team_size', $tsize);  
 wp_mail( $email, $subject, $message, $headers, $attachments );   
}
}

die();
}

?>