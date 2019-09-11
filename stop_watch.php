<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stopwatch.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<div class="container">
    <p id="result"></p>
</div>
<body>
<?php
include "Stop_watch.php";
$watch = new Stop_watch();
$watch->setStartTime();
echo "thoi gian bat dau la: " . $watch->getStartTime() . " microsecond " . "<br>";
for ($i = 0; $i < 10000; $i++) {
    echo $i;
};
$watch->setEndTime();
echo "time ket thuc: " . $watch->getEndTime() . "microSecond" . '<br>';
echo "time thuc hien vong lap: " . $watch->getTime() . "microSecond";
?>
</body>
</html>
