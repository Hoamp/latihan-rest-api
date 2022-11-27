<?php
/*
$murid = [
    [
        "nama" => "Thomas Setiawan",
        "nisn" => "8129",
        "email" => "thomas@gmail.com"
    ],
    [
        "nama" => "Andi Ramadhan",
        "nisn" => "8130",
        "email" => "andi@gmail.com"
    ],
];
*/

$dbh = new PDO('mysql:host=localhost;dbname=latihanphp', 'root', '');
$db = $dbh->prepare('SELECT * FROM pelajar');
$db->execute();

$murid = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($murid);
echo $data;
