<?php

print_r($_POST);

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// implode('#', $_post);
$_POST = array('titulo', 'categoria', 'descricao');
$comma_separated = implode(",", $_POST);


$texto = 'Titulo- '. $titulo . ' Categoria-  ' . $categoria . ' Descrição- ' . $descricao .  PHP_EOL;
$arquivo = fopen('arquivo.hd', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location: abrir_chamado.php');

?>