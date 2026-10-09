<?php 
$date = 14062016;
$day   = intdiv($date, 1000000);       
$month = intdiv($date, 10000) % 100;   
$year  = $date % 10000;                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation with dates</title>
</head>
<body>
    <?= "$day - $month - $year" ?>
</body>
</html>