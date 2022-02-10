<?php 



$image = imagecreatefromjpeg("certificado.jpg");

$titleCollor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleCollor);
imagestring($image, 5, 450, 350, "Guilherme Silveira Coelho", $titleCollor);
imagestring($image, 5, 450, 150, "Conclusao em: ".date('d/m/Y H:i:s'), $titleCollor);

header("Content-Type: image/jpg");

imagejpeg($image);
imagedestroy($image); 




 ?>