<?php

require 'php/conect.php';

$linhaPesquisa = $_POST['c4'];

$buscaBanco = $sql->query("SELECT id FROM publicacao WHERE linhapesquisa_id IS NULL  ");

$linha = $buscaBanco->fetch();  

$idPublicacao = $linha['id'];

$insereBanco = $sql->query("UPDATE publicacao SET linhapesquisa_id = '$linhaPesquisa' WHERE id = '$idPublicacao' " );

header("Location: index_lider.php");

?>