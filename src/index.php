<?php

namespace src;

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$url = "https://carol.selfhost.de/update?username=%s&password=%s";

$client = new Client();
$res = $client->request('GET', sprintf($url, $_ENV['username'], $_ENV['password']));
echo $res->getBody();
