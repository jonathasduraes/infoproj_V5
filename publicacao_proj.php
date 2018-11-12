<?php
require 'php/conect.php';
require 'header_lider.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>PAGINA DE PUBLICACAO DO PROJETO</h1>

<?php

$buscaProjeto = $sql->query("SELECT * FROM projetopesquisa");
$buscaBancoDocente = $sql->query("SELECT * FROM docentes");



 ?>
<meta charset="utf-8">
        
    <title>Cadastro de grupo de pesquisa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
       <style type="text/css">
        
    </style>    
</head>
<body>

  <form method="POST" action="publicacao_proj2">
<div class="container">
Selecione o projeto de pesquisa que será vinculada a publicação: 
                    <select class="form-control" name="projetoPesquisa">
                      <?php
                      echo '<option value="">Selecione..</option>';
                      echo '<option value="1">Nenhum</option>';
                         foreach ($buscaProjeto as $dadosProjeto) {                            
                    	   echo '<option value="' .$dadosProjeto['id'].'">'.$dadosProjeto['nome_projeto'].'</option>';
                     	 }
                      ?>
                    </select>              

                    Título da publicação: <br>
                    <input type="text" name="titulo_publicacao"><br>

                    Tipo de publicação: <br>
                    <select class="form-control" name="tipo_publicacao">
                    	<option value="1">Selecione..</option>
                    	<option value="2">Livro Completo</option>
                    	<option value="3">Capítulo de livro</option>
                    	<option value="4">Anais de congresso</option>
                    	<option value="5">Periódico de revista</option>
                    </select><br>

                    Data de publicação: <br>
                    <input type="date" name="data_publicacao"><br>

                    Nome do docente: <br>
                    <select class="form-control" name="docente">
                      <?php
                      echo '<option value="">Selecione..</option>';
                         foreach ($buscaBancoDocente as $dadosDocentes) {                           
                    	   echo '<option value="' .$dadosDocentes['id'].'">'.$dadosDocentes['nome_docentes'].'</option>';
                     	 }
                      ?>
                    </select>              

                    Referência(Padrão ABNT): <br>
                    <input type="text" name="referencia"><br>

                    Publicação:<br>
                    <textarea name="publicacao" rows="4" cols="50" > 
                      </textarea><br>

                    <input type="submit" name="enviar" value="enviar">

                </div>

</form>

</body>
</html>