<?php

    global $model;

	require_once(SITE_ENGINE.'functions/core.php');
	
	load(array("strings", 'automail'));
	
	load(array("NavBar", "ContactBox"), COMPONENTS);

    $model = load_page_model();

    load_view();