<?php

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['nome'];

$excluiBanco = $sql->query("DELETE from equipamentos where nome = '$nome'");
 
        header("Location: manutencao_equipamentos.php");
 
?>
