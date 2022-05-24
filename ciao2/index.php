<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "127.0.0.3:80");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);

curl_close($ch);  
echo "invio richiesta al docker 2";
if($_SERVER["REQUEST_METHOD"]=="GET"){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "127.0.0.1:80");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);  

        echo "bela";
}
?>