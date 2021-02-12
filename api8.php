<?php
$img=file('nga.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>