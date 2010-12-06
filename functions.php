<?php 

function get_post_attachements($post_id, $offset) {  
  $args = array(
	  'post_type' => 'attachment',
	  'numberposts' => 5,
	  'offset' => $offset,
	  'post_status' => null,
	  'post_parent' => $post_id
  ); 
  $attachments = get_posts($args);
  return $attachments;
}

function get_webcam_image() {
  $ret = "";  
  $files = scandir('/home/clairro/public_html/skibailetusnad.ro/webcam', 1); 
  $ret = "/webcam/" . $files[0];  
  return $ret;
}

add_action('parse_request','ajax_get_webcam_image');
function ajax_get_webcam_image($wp) {
    if( 'get_next_image' == $_POST['action'] ) {
        $files = scandir('/home/clairro/public_html/skibailetusnad.ro/webcam', 1); 
        echo "/webcam/" . $files[0];  
        exit();
    }
}

?>
