<?php
require_once('jsend.class.php');
ini_set('display_errors', 0);
ini_set('display_warnings', 0);
$enc = $_POST['encrypted'];
$jSEND = new jSEND(); 
$str = $jSEND->getData($enc);
echo $str;
?>
