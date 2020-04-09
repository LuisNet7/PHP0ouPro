<form method="POST">
 <input type="text" name="nome">
 <input type="submit" value="envia">
</form>
<?php

 $lista = file_get_contents('lista.txt');

 if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = $_POST['nome'];
  $lista .= "; ".$nome;
 } 
  file_put_contents('lista.txt', $lista);

 $lista = explode("; ", $lista)
 ?>

 <h2>Lista de Nomes: </h2>
 <ul>
  <?php foreach ($lista as $nome): ?>
  <li><?php echo $nome ;?></li>  
  <?php endforeach ?>
 </ul>