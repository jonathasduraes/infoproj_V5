<?php
require 'php/conect.php';

$nome = $_GET['nome_projeto']; 

$nomeProjeto = $_POST['nomeprojeto'];
$orientador = $_POST['orientador'];
$grupo = $_POST['grupo'];
$bolsa = $_POST['bolsa'];
$discente = $_POST['discente'];
$docente = $_POST['colaborador'];


$p = $sql->query(" UPDATE projetopesquisa SET nome_projeto = '$nomeProjeto', id_orientador = '$orientador', grupopesquisa_id = '$grupo',docentes_id ='$docente', tipobolsa_id ='$bolsa', dicente_id='$discente' WHERE nome_projeto = '$nome'");


      
        header("Location: manutencao_projeto_pesquisa.php");
   
/* echo $nomeProjeto; 
echo $orientador;
echo $grupo;
echo $bolsa;
echo $discente; 
echo $docente ;
echo $nome;
*/
?>