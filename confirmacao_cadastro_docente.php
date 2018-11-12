<?php

// CONEXAO COM O BANCO DE DADOS
require "php/conect.php";

// VERIFICA CONEXAO COM O BANCO DE DADOS. 
if (!$sql) {
	echo "Conexao mal sucedida com o banco";
}

$imagem = strtolower(substr($_FILES['img']['name'],-4));
$nomeDocentes = $_POST['nome'];
$linkLattesDocentes = $_POST['linkLattes'];
$cursoDocente = $_POST['curso'];


$nomeFinal = md5(time()).$imagem;
$diretorio = "arquivoIMG/";
  move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$nomeFinal);  

             $insereBanco = $sql->query("INSERT INTO docentes SET nome_docentes = '$nomeDocentes', lattes_docente = '$linkLattesDocentes', curso ='$cursoDocente', img ='$nomeFinal'");

             if($insereBanco == 1){
      
        header("Location: manutencao_docente.php");
    }else{
      echo "<h1> ERRO NA INSERÇÃO DO BANCO</h1>";
    }

?>