<?php

class Template {
	

	
	public static function getInstance() {
			if(!(self::$_instance instanceof self)) 
				self::$_instance = new self();
				self::basePath();
			return self::$_instance;
	}

		
	public static function insert($template, $data="", $minify=true) {
						
		$content = false;

		
		
				
				ob_start();
				require($template.'.php');
				$content = ob_get_clean();
				
				
		if($minify) { $content = self::full_trim($content); } 
		
			
		return $content;
	
	}

	
	private static function full_trim($str) {                                                    
    
			return trim(preg_replace('/\s{2,}/', ' ', $str)); 
	}
	
	private static function symbol($str) {

		return str_replace(['#space#','#line#'],['&nbsp;','&zwnj;'],$str);
		
		
	}
	

	
}
