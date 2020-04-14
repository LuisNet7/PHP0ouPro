<?php
//crop cortar imagem edeixar valor fixo 
$arquivo = 'mar.jpg';
$width = 300;
$height = 300;
$finalX = 0;
$finalY = 0;



list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$filnalHeight = 0;

if($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $filnalHeight = $height;
} else {
    $filnalHeight = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width) {
    $filnalHeight = $width;
    $finalWidth = $width / $ratio;

    $finalX = -(($finalWidth - $width) / 2);

} else {
    $filnalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);

}


$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    $finalX, $finalY,0,0,
    $finalWidth, $filnalHeight,
    $originalWidth, $originalHeight
);

header("Content-type: image/jpeg");
imagejpeg($imagem, null, 100);

//salvar imagem 
//imagejpeg($imagem, 'novo_mar.jpg', 100);

















