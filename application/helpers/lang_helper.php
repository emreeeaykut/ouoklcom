<?
function q($key){
	$ci =& get_instance();
	$dil = $ci->session->userdata("lang_code");	


	if(!$dil){
		$dil = "tr";
	}

	if($dil == "tr"){

		/*class*/
		$lang['active_tr'] = "active";
		$lang['active_en'] = "";


	}

	if($dil == "en"){
	
		/*class*/
		$lang['active_en'] = "active";
		$lang['active_tr'] = "";

	}

	return $lang[$key];
}

function get_lang(){
	$ci =& get_instance();
	$dil = $ci->session->userdata("lang");

	if(!$dil){
		return "1";
	}else{
		return $ci->session->userdata("lang");
	}
}




?>
