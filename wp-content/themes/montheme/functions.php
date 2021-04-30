<?php 

function montheme_support() {
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails');
    add_theme_support('menus');
    register_nav_menu( 'Header', 'Entete du Menu' );
    register_nav_menu( 'Footer', 'Pied de Page' );
}

function montheme_register_assets(){
    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper','jquery'] ,false,true);
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',[],false,true);
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js',[],false,true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator () {
    return '/';
}

function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_add_meta_box (){
    add_meta_box( 'montheme_sponso', 'sponsoring','montheme_render_sponso_box','post','side');

}

function montheme_render_sponso_box (){
  ?>
<input type="hidden" value="0" name="montheme_sponso">
<input type="checkbox" value="1" name="montheme_sponso">
<label for="monthemesponso">Cet article est sponsorisé</label>
  <?php 
}

function montheme_save_sponso ($post_id){
    if(array_key_exists('montheme_sponso',$_POST) && current_user_can( 'edit_post', $post_id ) ){
        if($_POST['montheme_sponso'] === '0'){
            delete_post_meta( $post_id, 'montheme_sponso');
        }else{
                update_post_meta( $post_id, 'montheme_sponso', 1 );
        }

    }
  }
add_action( 'after_setup_theme','montheme_support' );
add_action( 'wp_enqueue_scripts','montheme_register_assets' );
add_filter('wp_title','montheme_title_separator');
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_link_class');
add_action( 'add_meta_boxes','montheme_add_meta_box' );
add_action( 'save_post','montheme_save_sponso' );