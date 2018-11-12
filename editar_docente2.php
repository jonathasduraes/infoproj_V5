<?php


require 'php/conect.php';

$nome = $_GET['id']; 

$imagem = strtolower(substr($_FILES['img']['name'],-4));
$nomeFinal = md5(time()).$imagem;
$diretorio = "arquivoIMG/";
  move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$nomeFinal);

$nomeDocente = $_POST['nomeDocente'];
$lattesDocente = $_POST['lattesDocente'];
$cursoDocente = $_POST['cursoDocente'];



$atualizaBanco = $sql->query("UPDATE docentes SET nome_docentes = '$nomeDocente', lattes_docente = '$lattesDocente', curso = '$cursoDocente', 
img= '$nomeFinal' WHERE id = '$nome'  ");


      
        header("Location: manutencao_docente.php");
    


?>
