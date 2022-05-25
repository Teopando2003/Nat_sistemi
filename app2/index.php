<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
        $message = date("H:i:s") . " - ricevuto - ".PHP_EOL;
        file_put_contents("php://stdout", $message);
}
?>