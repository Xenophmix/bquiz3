<?php

include_once "base.php";


$movie = $Movie->find($_GET['id']);
$date = $_GET['date'];

$hr = date("G");

if ($hr >= 14 && $date === date("Y-m-d")) {
    $start = floor($hr / 2) - 5;
} else {
    $start = 1;
}

for ($i = $start; $i < 5; $i++) {

    $sum = $Order->sum('qt', ['movie' => $movie['name'], 'date' => $date, 'session' => $Movie->session[$i]]);

    dd($Movie);
    
    echo "<option value='{$Movie->session[$i]}'>";
    echo $Movie->session[$i];
    echo " 剩餘座位 " . (20 - $sum);
    echo "</option>";
}
