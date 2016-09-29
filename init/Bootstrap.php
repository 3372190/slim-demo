<?php

// Application Started Here!! (composer dump_autoload -o)
require_once __DIR__.'/../vendor/autoload.php';

// Instantiate Overwrited  Slim\App Object.** namespace \App\App;
$app = new App\App;

// Require the database Connection with Eloquent!
require_once __DIR__. '/database.php';

// Require Routes with slim->get() Method! to specify the path
require_once __DIR__. '/../app/Routes.php';
