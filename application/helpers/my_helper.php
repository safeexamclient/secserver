<?php

/* 通用加解密，密文是纯字母和数字，没有其他符号 */
if(! function_exists('my_encode') ) {
    function my_encode($text, $key = null) {
		$key = $key ? $key : "test";
		$md5str=preg_replace('|[0-9/]+|','',md5($key));
		$key = substr($md5str, 0, 2);
		$textlen = strlen($text);
		$rand_key=md5($key);
		$reslutstr = "";
		for ($i = 0; $i < $textlen; $i++) {
			$reslutstr.=$text[$i] ^ $rand_key[$i % 32];
		}
		$reslutstr = trim(base64_encode($reslutstr), "==");
		$reslutstr = $key.substr(md5($reslutstr), 0, 3) . $reslutstr;
		return $reslutstr;
	}
}

if(! function_exists('my_decode') ) {
    function my_decode($text) { 
		$key = substr($text, 0, 2); 
		$text = substr($text, 2); 
		$verity_str = substr($text, 0, 3); 
		$text = substr($text, 3); 
		if ($verity_str != substr(md5($text), 0, 3)) { 
	  		//完整性验证失败 
			return false; 
		} 
		$text = base64_decode($text); 
		$textlen = strlen($text); 
		$reslutstr = ""; 
		$rand_key=md5($key); 
		for($i = 0; $i < $textlen; $i++) {
			$reslutstr.=$text[$i] ^ $rand_key[$i % 32]; 
		} 
		return $reslutstr; 
	}
}

/* 得到随机的指定长度的大写字母组合，去除了易混淆的I和O等 */
if(! function_exists('get_rand_str_upper') ) {
    function get_rand_str_upper($length)
    {
        $str = array('A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');
        shuffle($str);
        $str = implode('',array_slice($str,0,$length));
        return $str;
    }
}    

/* 得到随机的指定长度的小写字母和数字组合，去除了易混淆的l和o等，以及部分数字  */
if(! function_exists('get_rand_str_lowerint') ) {
    function get_rand_str_lowerint($length)
    {
        $str = array('a','b','c','d','e','f','g','h','i','j','k','m','n','p','q','r','s','t','w','x','y','3','4','5','6','7','8','9');
        shuffle($str);
        $str = implode('',array_slice($str,0,$length));
        return $str;
    }
}    