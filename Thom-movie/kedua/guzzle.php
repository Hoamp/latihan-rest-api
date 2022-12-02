<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://www.omdbapi.com', [
    'query' => [
        'apikey' => '369635b6',
        's' => 'avenger'
    ]
]);

$result = json_decode($response->getBody()->getContents(), true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Guzzle</title>
</head>

<body>
    <?php foreach ($result['Search'] as $film) : ?>
        <ul>
            <li>Judul : <?= $film['Title']; ?></li>
            <li>Judul : <?= $film['Year']; ?></li>
            <li>
                <img src="<?= $film['Poster']; ?>" alt="">
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>