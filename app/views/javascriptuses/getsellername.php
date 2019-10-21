<?php
	//echo $data['seller_name_info']->NAME;
	if($data['seller_name_info'] == "" || is_null($data['seller_name_info'])) :
		echo "";
	else :
		echo $data['seller_name_info'];
	endif;
?>