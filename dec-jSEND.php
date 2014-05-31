<?php
require_once('jsend.class.php');
$enc = $_POST['encrypted'];
$jSEND = new jSEND(); 
$str = $jSEND->getData($enc);
echo $str;
?>
