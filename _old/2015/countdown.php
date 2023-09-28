<?php
/*
countdown.php
*/
    header("Content-type: image/jpeg");
    $imgPath = 'nedrakning.jpg';
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 0, 0, 0);
    
    
    $days = ceil((strtotime("11/5/2015") - time())/(60*60*24));

    $font = 'font.ttf';


    imagettftext($image, 80, 0, 350, 510, $color, $font, $days);

    imagejpeg($image);
?>