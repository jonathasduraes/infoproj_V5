<?php

require'header_lider.php';
require 'php/conect.php';

$id = $_GET['id'];

$excluiBanco = $sql->query("DELETE from docentes where id = '$id'");
 
        header("Location: manutencao_docente.php");
 
?>
