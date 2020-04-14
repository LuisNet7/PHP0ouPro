<?php
$arquivo = 'mar.jpg';
$maxWidth = 700;
$maxHeight = 700;

/*
$info = getimagesize($arquivo);
echo "<pre>";
print_r($info);
*/
//echo "<p>------------------------------------<p>";

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$filnalHeight = 0;

if($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $filnalHeight = $maxHeight;
} else {
    $filnalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

//echo $finalWidth."---".$filnalHeight;

//echo "<p>------------------------------------<p>";

$imagem = imagecreatetruecolor($finalWidth, $filnalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    0,0,0,0,
    $finalWidth, $filnalHeight,
    $originalWidth, $originalHeight
);

header("Content-type: image/jpeg");
imagejpeg($imagem, null, 100);

//salvar imagem 
//imagejpeg($imagem, 'novo_mar.jpg', 100);























