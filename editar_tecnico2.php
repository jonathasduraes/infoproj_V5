<?php

require 'php/conect.php';

$nome = $_GET['id']; 

$imagem = strtolower(substr($_FILES['img']['name'],-4));
$nomeFinal = md5(time()).$imagem;
$diretorio = "arquivoIMG/";
move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$nomeFinal);

$nomeTecnico = $_POST['nomeTecnico'];
$linkLattesTecnico = $_POST['linkLattes'];
$atvRealizadaTecnico = $_POST['atvRealizada'];
$formacaoTecnico = $_POST['formacaoTecnico'];
$anoConclusaoTecnico = $_POST['anoConclusao'];
$entradaGrupoTecnico = $_POST['entradaGrupo'];
$saidaGrupoTecnico = $_POST['saidadaGrupo'];

$atualizaBanco = $sql->query("UPDATE tecnico SET nome_tecnico = '$nomeTecnico', lattes_tecnico = '$linkLattesTecnico', atividade = '$atvRealizadaTecnico', formacao = '$formacaoTecnico',  ano_conclusao = '$anoConclusaoTecnico', data_inicio = '$entradaGrupoTecnico', data_fim = '$saidaGrupoTecnico', img = '$nomeFinal' Where id = $nome");
     
        header("Location: manutencao_tecnico.php");
    
?>
