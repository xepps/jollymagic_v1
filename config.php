<?php

	/*
	 * Config file for website settings
	 */
	 
	// Website Variables
	define("SITE_NAME", "ACEntertainments");
	define("SITE_URL", "http://jollymagic.com/");
	define("SITE_PATH", "./");
	define("SITE_ENGINE", SITE_PATH."engine/");
	 
	// Website structure
	define("SITE_PAGES", SITE_PATH."pages/");
    define("PAGE_CONTENT", SITE_PAGES."content-files/");
	define("COMPONENTS", SITE_PATH."components/");
	define("ASSETS", SITE_URL."assets/");
	define("IMAGES", ASSETS."images/");
	define("STYLES", ASSETS."styles/");
	define("LIBRARIES", ASSETS."libs/");
	define("SCRIPTS", ASSETS."scripts/");
    define("SLIDESHOWS", ASSETS."slideshows/");
    define("SLIDESHOW_VIEW", SITE_PATH."assets/slideshows/");
    define("DEFAULT_PAGE", "index.php");

	// Database Access
	define("DB_REQUIRED", false);
	define("DB_HOST", "");
	define("DB_USERNAME", "");
	define("DB_PASSWORD", "");
	define("DB_NAME", "");

	// Errors
	define("LOG_CRIT", 2);
	define("LOG_ERR", 3);
	define("LOG_WARN", 4);
	define("LOG_ALL", 5);
	
	define("LOG_LEVEL", LOG_WARN);

	define("ERROR_LEVEL", E_ALL ^ E_NOTICE);
	define("ERROR_LOG", SITE_PATH.'log.txt');

	// Others
	date_default_timezone_set("Europe/London");
