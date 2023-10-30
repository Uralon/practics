<?php

namespace work;

include 'App/car.php';
include 'lib/car.php';
$name_what = new \App\classes\car('Это машина');
$name = new \lib\classes\car('Эта машина в библиотеке');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/assets/css/main.css">
    <title>car</title>
</head>

<body>
    <div class="box">
    <div class="box-img">
        <img src="src/assets/image/car.jpeg" alt="car" class="image-name">
    </div>
        <p><?= $name_what->name ?></p>
    </div>
    <div class="box">
        <div class="box-img">
            <img src="src/assets/image/carInLibrary.jpeg" alt="library" class="image-name">
        </div>
        <p><?= $name->name ?></p>
    </div>
</body>

</html>