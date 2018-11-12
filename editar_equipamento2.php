<?php


require 'php/conect.php';

$nomeGet = $_GET['nome']; 

$nomeEquip = $_POST['nomeEquip'];
$descricao = $_POST['desc'];
$data_inicio = $_POST['dataInsercao'];
$data_remocao = $_POST['dataRem'];

if ($data_remocao == NULL) {

	$atualizaBanco = $sql->query("UPDATE equipamentos SET nome = '$nomeEquip', descricao = '$descricao', data_inicio = '$data_inicio' WHERE nome = '$nomeGet'");

}else{

	$atualizaBanco = $sql->query("UPDATE equipamentos SET nome = '$nomeEquip', descricao = '$descricao', data_inicio = '$data_inicio',data_remocao = '$data_remocao' WHERE nome = '$nomeGet'");

}

        header("Location: manutencao_equipamentos.php");
    
?>
