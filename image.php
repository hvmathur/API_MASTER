<?php

/*$byte_array = file_get_contents('test.png');
$image = base64_encode($byte_array);
$ap_param['userId'] = $uid;
$ap_param['image'] = $image;*/
//$arrayRes = $client->UploadImage($ap_param);
//$cc="";

$myfile = fopen("byte.txt", "r") or die("Unable to open file!");
$ff= fread($myfile,filesize("byte.txt"));
//echo $ff;
fclose($myfile);


$img = "<img src= 'data:image/png;base64, $ff' />";
echo $img;
?>