<?php

// NÃO ESTÁ LISTANDO SÓ UM GRUPO. LISTA APENAS MAIS DE UM CADASTRADO 

require 'php/conect.php';
session_start();
if(empty($_SESSION['prontuario'])){
$pront = $_SESSION['prontuario'];
$senha = $_SESSION['senha'];    
header("Location: index.php");
    exit;
}

$id = $_SESSION['prontuario'];


$pdo = $sql->prepare("SELECT * FROM usuario WHERE id = $id ");
$pdo->execute();

if($pdo->rowCount()> 0){
    
    $pdo = $pdo->fetch();
    $nome = $pdo['nome'];
    $img = $pdo['img'];
}else{
    header("Location: login.php");
}
$buscaPrimeiroAcesso = $sql->query("SELECT nome FROM usuario WHERE id = '$id'");
if ($nome == "" ) {
  header ("Location: complete_cadastro.php?id=$id") ; 
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrador</title>
      
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <a class="nav-link" href="index_adm.php">Pagina Inicial<span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastro.php">Cadastrar Lider ou Administrador</a>
          <a class="dropdown-item" href="criar_grupo_pesquisa.php">Criar Grupo de Pesquisa</a>
        </div>


      </li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="grupo_pesquisa.php">Consulta de grupos de pesquisa</a>
          
         
        </div>

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
         <?php echo '<a class="dropdown-item" href="consulta_cadastro.php?id='.$id.'">Perfil</a>' ?>
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
<?php

require 'php/conect.php';

$buscaUsuario= $sql->query("SELECT * FROM usuario");
if($buscaUsuario->rowCount()==0)
{ 
          header("Location: primeiro_acesso.php");
}

if(isset($_GET['id']) && empty($_GET['id'])==false){
    $id=addslashes($_GET['id']);
}

	$buscaGrupoPesquisa = $sql->query("SELECT nome_grupo, sigla_grupo, id FROM grupopesquisa");
        if($buscaGrupoPesquisa->rowCount()>0){
       
    }

    if(isset($_POST['nome']) && empty($_POST['nome']) ==false ){
  	 $sigla = addslashes($_POST['sigla_grupo']);
     $nome = addslashes($_POST['nome_grupo']);
     $img = addslashes($_POST['img_id']);
     $texto = addslashes($_POST['texto']);
}

?>   

<!DOCTYPE html>
<html>
<head>
<title>Pagina Inicial</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="pagina_geral.css"></script>
</head>
<body>
<div class="container mt-5 mb-5">
	<div class="row">
<div class="img">
		<img src="imagens/peoples.jpg" class="img-fluid" alt="Responsive image">
	</div>
</div>
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<h1 align="center">Grupo de Pesquisa</h1>
			<br>
			<br>
			<br>
			<ul class="timeline"> 
				
				<li> <?php 
if ($buscaGrupoPesquisa->rowCount() == 0) {
	echo "Desculpe, mas não há nenhum grupo de pesquisa cadastrado ou ativo. Entre em contato com seu líder de pesquisa ou administrador para maiores informações.";

// CRIA UM ARRAY E O EXIBE.
	
 }else{ 

 	while ($linha = $buscaGrupoPesquisa->fetch()) {
    //echo " {$linha['nomeGrupo']} -  {$linha['sigla_grupo']}<br /> <br /> <br /> ";

        ?>        			
        			<ul>
        			<li>
					<a><?php echo " {$linha['nome_grupo']} -  {$linha['sigla_grupo']}<br/>" ?> <a href="espelho_grupo.php?id=<?php echo $linha['id']?>  " target = "_black">Ver Mais</a></a>
					</li></ul>					
				</li>				
			</ul>
		</div>
	</div>
</div>
    </div>
</body>
</html>

<?php
}
}
?>