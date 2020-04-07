<?php 

if(isset($_POST['nome']))
{
    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);

    header("Location: aula2.php");
}

?>

<form method="POST">
    <input type="text" name="nome" />
    <input type="submit" value="Enviar" />
</form>    






















