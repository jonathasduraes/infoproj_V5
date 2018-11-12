<?php
/* FALTA ADICIONAR:
1 - Verificação dos campos 
*/

// CONEXAO COM O BANCO DE DADOS
require "php/conect.php";

// VERIFICA CONEXAO COM O BANCO DE DADOS. 
if (!$sql) {
	echo "Conexao mal sucedida com o banco";
}

$imagem = strtolower(substr($_FILES['img']['name'],-4));
$nomeTecnico = $_POST['nome'];
$linkLattesTecnico = $_POST['linkLattes'];
$atvRealizadaTecnico = $_POST['atvRealizada'];
$formacaoTecnico = $_POST['formacaoTecnico'];
$cursoSuperiorTecnico = $_POST['cursoSuperior'];
$anoConclusaoTecnico = $_POST['anoConclusao'];
$inclusaoGrupoTecnico = $_POST['inclusaoGrupo'];


$nomeFinal = md5(time()).$imagem;
$diretorio = "arquivoIMG/";
  move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$nomeFinal);  


            // INSERE NO BANCO DE DADOS
             $insereBanco = $sql->query("INSERT INTO tecnico SET nome_tecnico = '$nomeTecnico', lattes_tecnico = '$linkLattesTecnico', atividade = '$atvRealizadaTecnico', formacao ='formacaoTecnico', ano_conclusao = '$anoConclusaoTecnico', img ='$nomeFinal'");
       
if($insereBanco == 1){
      
        header("Location: manutencao_tecnico.php");
    }

?>