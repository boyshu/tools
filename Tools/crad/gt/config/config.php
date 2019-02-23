<?php 
/**
*  Geetest配置文件
* @author Tanxu
*/
define("CAPTCHA_ID", "2aac9b5cbb93a1cecb5b83a242564b65");
define("PRIVATE_KEY", "385d504c9f61c363dcfd6f9dd6154c67");
define("MOBILE_CAPTCHA_ID", "7c25da6fe21944cfe507d2f9876775a9");
define("MOBILE_PRIVATE_KEY", "f5883f4ee3bd4fa8caec67941de1b903");

function getIP() { 
	if (getenv('HTTP_CLIENT_IP')) { 
		$ip = getenv('HTTP_CLIENT_IP'); 
	} 
	elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
		$ip = getenv('HTTP_X_FORWARDED_FOR'); 
	} 
	elseif (getenv('HTTP_X_FORWARDED')) { 
		$ip = getenv('HTTP_X_FORWARDED'); 
	} 
	elseif (getenv('HTTP_FORWARDED_FOR')) { 
		$ip = getenv('HTTP_FORWARDED_FOR');
	} 
	elseif (getenv('HTTP_FORWARDED')) { 
		$ip = getenv('HTTP_FORWARDED'); 
	} 
	else { 
		$ip = $_SERVER['REMOTE_ADDR']; 
	}
	return $ip; 
}

 ?>