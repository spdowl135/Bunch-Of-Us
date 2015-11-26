<?php
//script for auto resizing any gif jpeg or png image
function ak_img_resize($target,$newcopy,$w,$h,$ext)
{
list($w_orig,$h_orig)=getimagesize($target);
$scale_ratio=$w_orig/$h_orig;
if(($w/$h)>$scale_ratio)
{
$w=$h*$scale_ratio;
}
else
{
$h=$w/$scale_ratio;
}
$img = "";
if($ext=="gif"||$ext=="GIF")
{
$img = imagecreatefromgif($target);
}
else if($ext=="png"||$ext=="PNG")
{
$img = imagecreatefrompng($target);
}
else
{
$img = imagecreatefromjpeg($target);
}
$tci = imagecreatetruecolor($w,$h);
imagecopyresampled($tci,$img, 0,0,0,0,$w,$h,$w_orig,$h_orig);
imagejpeg($tci,$newcopy,90);
}
/*
// ------------------ IMAGE CONVERT FUNCTION -------------------
// Function for converting GIFs and PNGs to JPG upon upload
function ak_img_convert_to_jpg($target, $newcopy, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $ext = strtolower($ext);
    $img = "";
    if ($ext == "gif"){ 
        $img = imagecreatefromgif($target);
    } else if($ext =="png"){ 
        $img = imagecreatefrompng($target);
    }
    $tci = imagecreatetruecolor($w_orig, $h_orig);
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w_orig, $h_orig, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 84);
}
*/
?>