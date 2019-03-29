<?php

require_once "routing.php";

route('/',function(){
    return "YOOOOO";
});


route('/',function(){
    return "Hello World";
});



$action = $_SERVER['REQUEST_URL'];

dispatch($action); 