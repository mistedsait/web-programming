<?php

require "vendor/autoload.php";

Flight::route("/",function (){
    echo "hello from /route";
});

Flight::route("GET /test",function (){
    echo "hello from /test";
});

Flight::start();

?>
