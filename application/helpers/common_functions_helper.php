<?php 
	if(!function_exists('base_url')){
		function base_ur(){
			return SITE_URL;	
		}
	}

	if(!function_exists('prent_r')){
		function pr($array = array()){
			echo "<pre>"; print_r($array); echo "</pre>";
		}
	}

	if(!function_exists('is_logged_in')){
		function is_logged_in(){
			$CI = & get_instance();
			if (!$CI->session->userdata('logged_in')){
				redirect(base_url().'login/');
			}
		}
	}

?>