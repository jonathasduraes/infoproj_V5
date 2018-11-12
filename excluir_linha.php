<?php

require 'php/conect.php';

$nome = $_GET['cod_linha'];

$sql->query("DELETE from linhapesquisa where cod_linha = '$nome'");
 
        header("Location: linha_pesquisa.php");

?>