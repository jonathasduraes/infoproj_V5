<?php

require 'php/conect.php';

$nome = $_GET['nome_projeto'];

$sql->query("DELETE from projetopesquisa where nome_projeto = '$nome'");
 
        header("Location: manutencao_projeto_pesquisa.php");

?>