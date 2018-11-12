<?php 
require 'php/conect.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>PROJETO PESQUISA - espelho</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
       <style type="text/css">
        
    </style> 



<?php

/*
pagina publica do projeto deve exibir: 
titulo do projeto, 
orientador OK,
orientado (aluno) OK 
linha de pesquisa,
tipo(com bolsa ou sem bolsa) 
data de publicação 


                                           MELHORIAS 
01 - Criar na tabela discente, um campo "id_projeto_pesquisa";
02 - Inserir um campo de data na tabela de projeto de pesquisa para salvar a data de criação do projeto utilizando o (now)
03 - Realizar verificações de campos vazios.
04 - Exibir linha de pesquisa

*/

//Pega o ID do grupo, para que seja exibida as informações do projeto de pesquisa relacionada a esse ID
$id_grupo = $_GET['id']; //ok

$buscaBancoVazio = $sql->query("SELECT * FROM projetopesquisa WHERE grupopesquisa_id = '$id_grupo' ");

if ($buscaBancoVazio->rowCount() == 0) {
  echo '  <div class="col-md-6 col-md-offset-3" align="center" >

  <h1 >Desculpe!</h1>
  <h2 >Esse grupo de pesquisa ainda não possui um projeto de pesquisa!</h1>
  <a echo href="index_lider.php" class="btn btn-primary"> Retornar para a pagina inicial</a>
  <a echo href="cadastro_projeto_pesquisa.php" class="btn btn-primary"> Cadastrar um projeto de pesqusia</a>
</div>';

}else{

// ----------------------------------- BUSCA O NOME DO PROJETO ----------------------------------------------
$buscaBancoProjeto = $sql->query("SELECT nome_projeto FROM projetopesquisa WHERE grupopesquisa_id = '$id_grupo'");

$linhaProjeto = $buscaBancoProjeto->fetch();
//print_r($linhaProjeto);
//print_r($buscaBancoProjeto);

// ----------------------------------- BUSCA O NOME DOCENTE -------------------------------------------------
$buscaBancoDocente = $sql->query("SELECT nome_docentes FROM docentes INNER JOIN projetopesquisa 
ON projetopesquisa.id_orientador = docentes.id WHERE grupopesquisa_id = '$id_grupo'");

$linha = $buscaBancoDocente->fetch();

// ----------------------------------- BUSCA O NOME DO COLABORADOR --------------------------------------------
$buscaBancoColaborador = $sql->query("SELECT nome_docentes FROM docentes INNER JOIN projetopesquisa 
ON projetopesquisa.docentes_id = docentes.id WHERE grupopesquisa_id = '$id_grupo'  ");

$linhaColaborador = $buscaBancoColaborador->fetch();

// ----------------------------------- BUSCA DISCENTE -----------------------------------
$buscaBancoDiscente = $sql->query("SELECT nome_discente FROM discente INNER JOIN projetopesquisa 
ON projetopesquisa.dicente_id = discente.id WHERE grupopesquisa_id = '$id_grupo'");

$linhaDiscente = $buscaBancoDiscente->fetch();

// ----------------------------------- BUSCA TIPO DE BOLSA -----------------------------------
$buscaBancoBolsa = $sql->query("SELECT nome_bolsa FROM tipobolsa INNER JOIN projetopesquisa 
ON projetopesquisa.tipobolsa_id = tipobolsa.id WHERE grupopesquisa_id = '$id_grupo'");

$linhaBolsa = $buscaBancoBolsa->fetch(); 
//print_r($linhaBolsa);

// ----------------------------------- BUSCA A LINHA DE PESQUISA -----------------------------------
$buscaBancolinhaPesquisa = $sql->query("SELECT grupopesquisa_linhapesquisa_id FROM grupopesquisa_docentes INNER JOIN projetopesquisa 
ON projetopesquisa.grupopesquisa_id = grupopesquisa_docentes.grupopesquisa_id ");

$linhaPesquisa = $buscaBancolinhaPesquisa->fetch(); 
//print_r($linhaPesquisa); 
$linhaP = $linhaPesquisa['grupopesquisa_linhapesquisa_id'];

$buscaNomeLinha = $sql->query("SELECT nome_linha FROM linhapesquisa WHERE cod_linha = '$linhaP' ");

/*$buscaNomeLinha = $sql->query("SELECT p.linhapesquisa_id,li.nome_linha from linhapesquisa  AS li
inner join publicacao p 
on p.linhapesquisa_id = li.cod_linha WHERE cod_linha = '$linhaP' ");*/


$linhaP = $buscaNomeLinha->fetch();

//echo "Linha: $linhaP";

?>

   
</head>
<body>
	<h1 align="center"> PÁGINA PÚBLICA DE PROJETO DE PESQUISA</h1>
<div class="container">
	<div style="float:left;"> 
          <div class="card" style="width:900px">
          <div class="card-body">
          <h3 class="card-title"> <b>Nome do projeto:</b> <?php echo "{$linhaProjeto['nome_projeto']}"; ?></h3>
          <h3 class="card-text"> <b>Docente responsável pelo projeto:</b> <?php echo "{$linha['nome_docentes']}"; ?>  </h3>
          <h3 class="card-text"> <b>Colaborador: </b> <?php echo "{$linhaColaborador['nome_docentes']}"; ?> </h3>
          <h3 class="card-text"> <b>Orientado (aluno):  </b> <?php echo "{$linhaDiscente['nome_discente']}"; ?> </h3>
          <h3 class="card-text"> <b>Linha de pesquisa:</b> <?php echo "{$linhaPesquisa['grupopesquisa_linhapesquisa_id']}"; ?> </h3>
          <h3 class="card-text"> <b>Tipo projeto:</b> <?php echo "{$linhaBolsa['nome_bolsa']}"; ?> </h3>
          <h3 class="card-text"> <b>Data de publicação:</b> </h3>
          <center>
          <a echo href='index_lider.php' class="btn btn-primary"> Retornar para a pagina inicial</a> 
          
       </center>
       </div> 
</div>
</div>  
</div>

<style type="text/css">
div.card {  
  margin: 15px;
}

	<h4></h4>

  <?php
}
?>

</body>
</html>