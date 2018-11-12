<?php
require "php/conect.php";

$nomeEquipamento = $_POST['nomeEquipamento'];
$descEquip = $_POST['descEquip'];
$dataInsercao = $_POST['dataInsercao'];

$insereBanco = $sql->query("INSERT INTO `equipamentos`( `nome`, `descricao`, `data_inicio`) VALUES ('$nomeEquipamento','$descEquip','$dataInsercao') ");
   
        header("Location: manutencao_equipamentos.php");
  
?>