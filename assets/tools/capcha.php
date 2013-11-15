<?php
  
include realpath(dirname(__FILE__)) . '/../inc/init.php';

fSession::open();

$randMath = $_GET['n'];
/*image SIZE*/
$im = imagecreatetruecolor(120, 35);

/*Color code for orange*/
//$orange = imagecolorallocate($im, 0xFF, 0x8c, 0x00);
$background = imagecolorallocate($im, 255, 255, 255); // white

/*Color code for white*/
$fontColor = imagecolorallocate($im, 0, 0, 0);

/*Generate a random string using md5*/ 
$md5_hash = md5(rand(0,$randMath)); 

/*Trim the string down to 6 characters*/ 
$captcha_code = substr($md5_hash, 15, 6); 

/*Store the value of the generated captcha code in session*/
fSession::set('captcha', $captcha_code);
//$_SESSION['captcha'] = $captcha_code; 

/* Set the background as orange */
imagefilledrectangle($im, 0, 0, 220, 35, $background);

/*Path where TTF font file is present*/
$font_file = 'verdana.ttf';

/* Draw our randomly generated code*/
imagefttext($im, 22, 0, 5, 30, $fontColor, $font_file, $captcha_code);

/* Output the image to the browser*/
header('Content-Type: image/png');
imagepng($im);


/*Destroy*/
imagedestroy($im);
?>