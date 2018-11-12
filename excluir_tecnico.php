<?php

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['nome'];

$excluiBanco = $sql->query("DELETE from tecnico where nome_tecnico = '$nome'");
 
        header("Location: manutencao_tecnico.php");
 

?>
