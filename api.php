<?php
$mp4=file('ks.txt');
$url=array_rand($mp4);
header("Location:".$mp4[$url]);
?>