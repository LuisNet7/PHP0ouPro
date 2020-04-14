<?php
//biblioteca de manipulção de imagens GD2
$imagem = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($imagem, 255, 0, 0);
imagefill($imagem, 0, 0, $cor);

//mostar a imagem na tela sem precisar salvar
header("Content-type: image/jpeg");
imagejpeg($imagem, null, 100);

//salvar aimagem em jpeg
//imagejpeg($imagem, 'nova_imagem.jpg', 100);

//salvar a imagem png
//imagepng($imagem, 'nova_imagem.png');

//mostrar na tela em formato png
//header("Content-type: image/png");
//imagejpeg($imagem, null);



































