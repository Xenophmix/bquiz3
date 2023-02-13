<?php
include_once "base.php";

$Order->del([$_POST['type'] => $_POST['value']]);
