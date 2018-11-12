<?php
require 'php/conect.php';
   
session_start();
if(empty($_SESSION['prontuario'])){
$pront = $_SESSION['prontuario'];
$senha = $_SESSION['senha'];    
header("Location: index.php");
    exit;
}

$id = $_SESSION['prontuario'];


$buscaBanco = $sql->prepare("SELECT * FROM usuario WHERE id = '$id' ");
$buscaBanco->execute();

if($buscaBanco->rowCount()> 0){
    
    $buscaBanco = $buscaBanco->fetch();
    $nome = $buscaBanco['nome'];
    $img = $buscaBanco['img'];
}else{
    header("Location: login.php");
}


?>



<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="utf-8" >
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
      
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img width="170px" height="100px" src="imagens/logo.png"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index_lider.php">Pagina Inicial<span class="sr-only">(current)</span></a>
     </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Grupos de pesquisa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="grupo_pesquisa_lider.php">Editar Grupo</a>
          <a class="dropdown-item" href="cadastrar_linhapesquisa.php">Linha Pesquisa</a>
          <a class="dropdown-item" href="linha_pesquisa.php">Editar Linha Pesquisa</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Técnicos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastro_tecnico.php">Cadastrar técnico</a>
          <a class="dropdown-item" href="manutencao_tecnico.php">Editar técnico</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Docentes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastro_docente.php">Cadastrar Docentes</a>
          <a class="dropdown-item" href="manutencao_docente.php">Editar Docentes</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Equipamentos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastro_equipamentos.php">Cadastrar Equipamentos</a>
          <a class="dropdown-item" href="manutencao_equipamentos.php">Editar Equipamentos</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proj. Pesq.
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastro_projeto_pesquisa.php">Cadastrar Projeto</a>
          <a class="dropdown-item" href="manutencao_projeto_pesquisa.php">Editar Projeto</a>
          <a class="dropdown-item" href="publicacao_proj.php">Adicionar publicação</a>
          
        </div>
      </li>

    </ul>
  </div>

      
 


   <div class="i">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php if ($img == true ) { echo '<img  width="65px" height="40px" src="arquivoIMG/'.$img.'" />';}?>
  <?php echo'<h7>'. $nome.'</h7>' ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <?php echo '<a class="dropdown-item" href="consulta_cadastro.php?id='.$id.'">Perfil</a>';?>
         <br>
   <a  class="dropdown-item" href="php/sairphp.php"> Sair</a>
        </div>
      
   </ul>
   <style type="text/css">
div.i {  
  margin: 20px;
}

</style>
  
</nav>



</body>
</html>

