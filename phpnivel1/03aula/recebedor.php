<?php
//aula5

echo '<pre>';
print_r( $_FILES );

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

if(in_array(isset($_FILES['arquivo']['type']), $permitidos)){
   // $nome = isset($_FILES['arquivos']['name']);
   $nome = md5(time().rand(0, 1000)).'jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'D:\xampp2\htdocs\php\PHP0P\phpnivel1\03aula\arquivos'.$nome);

    echo 'Arquivo salvo com sucesso!';
} else {
    echo 'Arquivo não permitido';
}



















