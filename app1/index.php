<?php
$ch = curl_init("10.0.5.2:5002");//"10.0.5.2:5002");//127.0.0.1:5002
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$output = curl_exec($ch);
curl_close($ch);
echo "fatta richiesta a 5002";

?>