<?php
// Deal with the watermark image
$watermark = imagecreatefrompng($_FILES['watermark']['tmp_name']);
$watermark_x = imagesx($watermark);
$watermark_y = imagesy($watermark);

foreach($_FILES['files']['tmp_name'] as $index => $file) {
	// Deal with the source image
	$image = imagecreatefromjpeg($file);
	imagecopy($image, $watermark, round(imagesx($image) / 2) - round($watermark_x / 2), round(imagesy($image) / 2) - round($watermark_y / 2), 0, 0, $watermark_x, $watermark_y);
	imagejpeg($image, dirname(__FILE__) . '/images/' . preg_replace('/.jpeg|.jpg/i', '', $_FILES['files']['name'][$index]) . '_wm.jpg');
	imagedestroy($image);
}

imagedestroy($watermark);

echo "Done!";
?>