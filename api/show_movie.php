<?php
include_once "base.php";

$movie = $Movie->find($_POST['id']);


// 方法一
// if($movie['sh'] == 1){
//   $movie['sh'] = 0;
// }else{
//   $movie['sh'] = 1;
// }

// 方法二
// $movie['sh'] = ($movie['sh'] == 1) ? 0 : 1;

// 方法三 效率最好
$movie['sh'] = ($movie['sh'] + 1) % 2;

$Movie->save($movie);
