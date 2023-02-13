<?php 
include_once "base.php";
dd($_POST);

$max_id=$Order->max('id')+1;

$_POST['num']=date("Ymd") . sprintf("%04d",$max_id);

dd($_POST);
sort($_POST['seats']);

$_POST['seats']=serialize($_POST['seats']);

$Order->save($_POST);
