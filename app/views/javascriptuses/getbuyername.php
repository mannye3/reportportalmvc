<?php
	//var_dump($data['buyer_name_info']->NAME);
	if($data['buyer_name_info'] == "" || is_null($data['buyer_name_info'])) :
		echo "";
	else :
		echo $data['buyer_name_info'];
	endif;
	//echo $data['buyer_name_info']->NAME;
?>