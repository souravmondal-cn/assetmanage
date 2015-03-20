<?php

//create alias for Router
use \core\router,
    \helpers\url;

//define routes
Router::any('', '\controllers\User@login');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
