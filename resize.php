<?php

include('php-image-magician/php_image_magician.php');

$magicianObj = new imageLib($_GET['image']);
$magicianObj -> resizeImage(250, 140, 'crop');

$magicianObj -> displayImage();
?>
