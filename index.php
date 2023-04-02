<?php 
require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$name = $_ENV['NAME'];
$year = $_ENV['YEAR'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test deploy php with composer</title>
</head>
<body>
    <h2>Name: <?= $name ?></h2>
    <h2>Year: <?= $year ?></h2>
</body>
</html>