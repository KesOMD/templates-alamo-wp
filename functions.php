<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');

include('settings.php');

function debug_to_console( $data )
{
  if ( is_array( $data ) )
    $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
  else
    $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

  echo $output;
}

if (function_exists('add_theme_support')) {

	add_theme_support('menus');

}

function revconcept_get_images($post_id) {
    global $post;
 
    $thumbnail_ID = get_post_thumbnail_id();
 
    $images = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

    $number_of_images = count($images);
 
    if ($images) :
 
        foreach ($images as $attachment_id => $image) :
 
        if ( $image->ID != $thumbnail_ID ) :
 
          $img_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); //alt
          if ($img_alt == '') : $img_alt = $image->post_title; endif;
          $image_cap = $img_alt;

          $big_array = image_downsize( $image->ID, 'post-gal-image' );
          $img_url = $big_array[0];
          $small_array = image_downsize( $image->ID, 'post-gal-thumb' );
          $thumb_url = $small_array[0];
          
          echo '<li ';
          echo 'data-thumb="';
          echo $thumb_url;
          echo '"><img ';
          echo 'class="post-slide" ';
          echo 'src="';
          echo $img_url;
          echo '" alt=';
          echo json_encode($img_alt);
          echo ' />';
          echo '<div class="flexslider-caption">';
          echo '<p>' . $img_alt . '</p>';
          echo '</div></li><!--end slide-->';
 
    endif; endforeach; endif; }

function revconcept_get_images_links($post_id) {
    global $post;
 
    $thumbnail_ID = get_post_thumbnail_id();
 
    $images = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

    $number_of_images = count($images);
    
    $postURL = get_permalink( $post_id );
    $postTitle = the_title_attribute( array( 'echo' => 0, 'post' => get_post( $post_id ) ) );
    
    if ($images) :
 
        foreach ($images as $attachment_id => $image) :
 
        if ( $image->ID != $thumbnail_ID ) :
 
          $img_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); //alt
          if ($img_alt == '') : $img_alt = $image->post_title; endif;
          $image_cap = $img_alt;

          $big_array = image_downsize( $image->ID, 'post-gal-image' );
          $img_url = $big_array[0];
          $small_array = image_downsize( $image->ID, 'post-gal-thumb' );
          $thumb_url = $small_array[0];
          


          echo '<li ';
          echo 'data-thumb="';
          echo $thumb_url;
          echo '"><a href="';
          echo $postURL;
          echo '" title="';
          echo $postTitle;
          echo '"><img ';
          echo 'src="';
          echo $img_url;
          echo '" alt=';
          echo json_encode($img_alt);
          echo ' /></a>';
          echo '<div class="flexslider-caption">';
          echo '<p>' . $img_alt . '</p>';
          echo '</div></li><!--end slide-->';
 
    endif; endforeach; endif; }

function get_category_id($cat_name){

	$term = get_term_by('name', $cat_name, 'category');

	return $term->term_id;

}

if( !function_exists('get_the_content_with_format') ):
function get_the_content_with_format ($more_link_text = '', $stripteaser = 0, $more_file = '') {
$content = get_the_content($more_link_text, $stripteaser, $more_file);
$content = apply_filters('the_content', $content);
$content = strip_tags($content, '<p><a><ul><ol><li><h1><h2><h3><strong><br><br /><textarea><iframe><strong><span><em>');
return $content;
}
endif;

function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'infographic' )) {
          $single_template = dirname( __FILE__ ) . '/single-info.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9

  add_theme_support( 'post-thumbnails' );

  add_image_size('featured-slideshow',309,514,true);

  add_image_size('featured-big',369,408,true);

  add_image_size('featured-medium',369,196,true);

  add_image_size('featured-small',60,58,true);

  add_image_size('featured-blog',760,291,true);

  add_image_size('home-post',321,209,true);

  add_image_size('home-post-iphone',300,331,true);

  add_image_size('home-medium',299,165,true);

  add_image_size('home-small',224,124,true);

  add_image_size('blog-post',368,203,true);

  add_image_size('home-blog-image', 516, 318, true);

  add_image_size('post-gal-thumb', 50, 50, true);

  add_image_size('post-gal-image', 768, 372, true);

  add_image_size('pop-thumb', 212, 130, true);

}



if ( function_exists('register_sidebar') ) {

        register_sidebar(array(

                'name'=>'Sidebar',
		'before_widget' => '<div class="side_box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

        

        register_sidebar(array(

                'name'=>'Footer',
		'before_widget' => '<div class="footer_box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));        

        

        register_sidebar(array(

                'name'=>'Footer Last',
		'before_widget' => '<div class="footer_box footer_box_last">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));                
}



function catch_that_image() {

  global $post, $posts;

  $first_img = '';

  ob_start();

  ob_end_clean();

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

  $first_img = $matches [1] [0];



  if(empty($first_img)){ //Defines a default image

    $first_img = "/images/post_default.png";

  }

  return $first_img;

}



function kriesi_pagination($pages = '', $range = 2)

{  

     $showitems = ($range * 2)+1;  



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

         $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }   



     if(1 != $pages)

     {

         echo "<div class='pagination'>";

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";

         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";

         echo "</div>\n";

     }

}

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>
  <h3>Extra profile information</h3>
  <table class="form-table">

    <tr>
      <th><label for="facebook">Facebook</label></th>

      <td>
        <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Facebook Profile.</span>
      </td>
    </tr>

    <tr>
      <th><label for="twitter">Twitter</label></th>

      <td>
        <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Twitter Profile.</span>
      </td>
    </tr>

    <tr>
      <th><label for="gplus">Google +</label></th>

      <td>
        <input type="text" name="gplus" id="gplus" value="<?php echo esc_attr( get_the_author_meta( 'gplus', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Google+ Profile.</span>
      </td>
    </tr>

  </table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {
  if ( !current_user_can( 'edit_user', $user_id ) )
    return false;

  /* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
  update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
  update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
  update_user_meta( $user_id, 'gplus', $_POST['gplus'] );
}



/*

// **** EX RECENT POSTS START ****



class ex_recent_posts extends WP_Widget {



	function ex_recent_posts() {

		parent::WP_Widget(false, 'Ex Recent Posts');

	}



	function widget($args, $instance) {

		$args['title'] = $instance['title'];

		ex_func_recentposts($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

		$title = esc_attr($instance['title']);

?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<?php

	}

 }

function ex_func_recentposts($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        ?>

        <ul class="recent_posts_list">

           <?php

  

  global $post;

           //$myposts = get_posts('numberposts=6&category_name=Featured Small');

           $myposts = get_posts('numberposts=6');

           foreach($myposts as $post) :

             setup_postdata($post);

           ?>

          <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php the_time('m.d.Y'); ?></p><div class="clear"></div></li>

          <?php endforeach; ?>

        </ul>

        <?php

        wp_reset_query();

        

        echo $args['after_widget'];



}

register_widget('ex_recent_posts');  



// **** EX RECENT POSTS END ****













// **** EX SOCIAL START ****



class ex_social extends WP_Widget {



	function ex_social() {

		parent::WP_Widget(false, 'Ex Social');

	}



	function widget($args, $instance) {

                $args['social_title'] = $instance['social_title'];

		$args['dribbble_link'] = $instance['dribbble_link'];

                $args['forrst_link'] = $instance['forrst_link'];

                $args['facebook_link'] = $instance['facebook_link'];

                $args['twitter_link'] = $instance['twitter_link'];

                $args['rss_link'] = $instance['rss_link'];

		ex_func_social($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

                $social_title = esc_attr($instance['social_title']);

		$dribbble_link = esc_attr($instance['dribbble_link']);

                $forrst_link = esc_attr($instance['forrst_link']);

                $facebook_link = esc_attr($instance['facebook_link']);

                $twitter_link = esc_attr($instance['twitter_link']);

                $rss_link = esc_attr($instance['rss_link']);

?>

                <p><label for="<?php echo $this->get_field_id('social_title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('social_title'); ?>" name="<?php echo $this->get_field_name('social_title'); ?>" type="text" value="<?php echo $social_title; ?>" /></label></p>

		<p><label for="<?php echo $this->get_field_id('dribbble_link'); ?>"><?php _e('Dribbble Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('dribbble_link'); ?>" name="<?php echo $this->get_field_name('dribbble_link'); ?>" type="text" value="<?php echo $dribbble_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('forrst_link'); ?>"><?php _e('Forrst Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('forrst_link'); ?>" name="<?php echo $this->get_field_name('forrst_link'); ?>" type="text" value="<?php echo $forrst_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Facebook Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo $facebook_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Twitter Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text" value="<?php echo $twitter_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('rss_link'); ?>"><?php _e('RSS Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('rss_link'); ?>" name="<?php echo $this->get_field_name('rss_link'); ?>" type="text" value="<?php echo $rss_link; ?>" /></label></p>

<?php

	}

 }

function ex_func_social($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        echo $args['before_widget'] . $args['before_title'] . $args['social_title'] . $args['after_title'];

        ?>

        <ul class="stay_connected_list">

          <li><a href="<?php echo $args['dribbble_link']; ?>">Catch us on Dribbble</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></li>

          <li><a href="<?php echo $args['forrst_link']; ?>">Find us on Forrst</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/forrst-icon.png" /></li>

          <li><a href="<?php echo $args['facebook_link']; ?>">Find us on Facebook</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></li>

          <li><a href="<?php echo $args['twitter_link']; ?>">Follow us on Twitter</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></li>

          <li class="last"><a href="<?php echo $args['rss_link']; ?>">Subscribe to our RSS</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" /></li>

        </ul>

        <?php

        

        echo $args['after_widget'];



}

register_widget('ex_social');  



// **** EX SOCIAL END ****













// **** EX SEARCH START ****



class ex_search extends WP_Widget {



	function ex_search() {

		parent::WP_Widget(false, 'Ex Search');

	}



	function widget($args, $instance) {

		ex_func_search($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

?>



<?php

	}

 }

function ex_func_search($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        echo $args['before_widget'];

        ?>

          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

          <INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" ALT="Submit Form">

          <input type="text" class="search_box" name="s" id="s" value="Search" onclick="if(this.value == 'Search') this.value='';" onblur="if(this.value == '') this.value='Search';" />

          </form>

          <div class="clear"></div>

        <?php

        

        echo $args['after_widget'];



}

register_widget('ex_search');  



// **** EX SEARCH END ****

*/

?>