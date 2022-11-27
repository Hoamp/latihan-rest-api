<?php

$data = file_get_contents('coba.json');
$murid = json_decode($data, true);

var_dump($murid);

echo $murid[0]["guru"]["
"];
