<?php
	
	/*
	 * Generic functions that assist the loading and running of the site
	 */

	// The following functions find pages and load them 
	function get_url_request_array() {
		return explode('/', rtrim($_GET['url_request_array'], '/'));
	}
	
	function find_component($file_array, $prefix = SITE_PAGES) {
		$current_dir = '';
		for($i = 0; $i < count($file_array); $i++) {
		
			if(file_exists($prefix.$current_dir.$file_array[$i].'.php')) {
				return $prefix.$current_dir.$file_array[$i].'.php';
			}
				
			if(file_exists($prefix.$current_dir.$file_array[$i].'/') && isset($file_array[$i+1])) {		
				$current_dir .= $file_array[$i].'/';
				continue;
			}
		}
		return false;
	}

    function find_page($file_array, $prefix = SITE_PAGES) {
        $current_dir = '';
        for($i = 0; $i < count($file_array); $i++) {

            if(file_exists($prefix.$current_dir.$file_array[$i].'.xml')) {
                return $prefix.$current_dir.$file_array[$i].'.xml';
            }

            if(file_exists($prefix.$current_dir.$file_array[$i].'/') && isset($file_array[$i+1])) {
                $current_dir .= $file_array[$i].'/';
                continue;
            }
        }
        return false;
    }
	
	function load_page_model() {
		$url_array = get_url_request_array();
		
		if(count($url_array) == 1 && $url_array[0] == '') {
			$page_model = simplexml_load_file(SITE_PAGES.'Home.xml');
		} elseif($path = find_page($url_array)) {
            $page_model = simplexml_load_file(find_page($url_array));
		} else {
            header("HTTP/1.0 404 Not Found");
            $page_model = simplexml_load_file(SITE_PAGES.'404.xml');
		}
        return $page_model;
	}

    function load_view() {
        include(DEFAULT_PAGE);
    }

	function uses($file_name, $directory = null) {	
		if($directory != null && find_component(array($file_name), $directory)) {
			require_once(find_component(array($file_name), $directory));
		} elseif(find_component(array($file_name), SITE_ENGINE.'functions/')) {
			require_once(find_component(array($file_name), SITE_ENGINE.'functions/'));
		} elseif(find_component(array($file_name), SITE_PATH.'functions/')) {
			require_once(find_component(array($file_name), SITE_PATH.'functions/'));
		} else {
			write_to_log(LOG_CRIT, "Tried to access missing functions file: ". $file_name);
		}
	}

	function load($files, $directory = null) {
		foreach($files as $file) {
			uses($file, $directory);
		}
	}
	
	function load_contents($directory) {
		$contents = scandir($directory);
		
		foreach($contents as $file) {
			$name = explode(".", $file);
			if (!starts_with($file, ".") && $name[1] == "php") {
				uses($name[0], $directory);
			}
		}
	}
	
	// The following deal with writing errors to the error log
	
	function write_to_log($level, $error) {	
		if($level > LOG_LEVEL)
			return;
	
		switch($level) {
			case 2: $code = "[CRITICAL]";
			break;
			case 3: $code = "[ERROR]";
			break;
			case 4: $code = "[WARNING]";
			break;
			default: $code = "[MESSAGE]";
			break;
		}
	
		$fp = fopen(ERROR_LOG,'a');
		date_default_timezone_set("Europe/London");
		fwrite($fp, date("d/m/Y H:i:s").' '. $code .' | '. $_SERVER['REMOTE_ADDR'] .' | '. $error. "\n");
		fclose($fp);
	}
