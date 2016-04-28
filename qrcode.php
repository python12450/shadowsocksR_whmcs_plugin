<?php
 include('./qr/phpqrcode.php');
 $data=$_GET['data'];
 define('IMAGE_WIDTH', 500);
define('IMAGE_HEIGHT', 500);
$ecc='QR_ECLEVEL_L';

$size=300;
 QRcode::png($data,false,$ecc,4);

 
?>