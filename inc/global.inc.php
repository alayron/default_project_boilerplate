<?php

/* ====================================================
	path constants
	================================================= */
	
	$project_name = 'default_project_boilerplate';
	
	define('HTTP_ROOT', '/'.$project_name);
	
	define('FILE_PATH', '/Library/WebServer/Documents/'.$project_name);

/* ====================================================
	navigation object
	================================================= */
	
	$NAVIGATION_GLOBAL = json_decode('
		{
			"label":"Default Project Boilerplate",
			"id":"content",
			"submenu": [
				{
					"label":"Page",
					"id":"page",
					"submenu": [
						{
							"label":"Subpage One",
							"id":"subpage_one"
						}, {
							"label":"Subpage Two",
							"id":"subpage_two"
						}
					]
				}
			]
		}
	');
	
/* =============================================================================
	check_include
	========================================================================== */
	
	function check_include($_path) {
		global $NAVIGATION_GLOBAL;
		$tmp = check_include_rec(Array($NAVIGATION_GLOBAL),$_path);
		if(!is_Array($tmp)) return false;
		return array_reverse($tmp);
	}
	
	function check_include_rec($_navigation, $_path) {
		foreach($_navigation as $subelement) {
			if($subelement->id == $_path) return Array($subelement->id);
			if($subelement->submenu) {
				$tmp = check_include_rec($subelement->submenu, $_path);
				if($tmp){
					array_push($tmp, $subelement->id);
				} 
				return $tmp;
			}
		}	
	}
	

?>