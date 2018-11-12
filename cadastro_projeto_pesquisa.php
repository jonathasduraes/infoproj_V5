<?php

require'header_lider.php';
require 'php/conect.php';

$buscaBanco = $sql->query("SELECT * FROM grupopesquisa");
$buscaBancoDocente = $sql->query("SELECT * FROM docentes");

//$dados = $buscaBanco->fetch();
$tipoProjeto = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
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
<div class="container">
	<form method="POST" action="cadastro_projeto_pesquisa2.php">
    	
			<div class="col-md-6 col-md-offset-3">
				
                             <div class="text-center mb-4">
                             <p style="font-size:150%; text-align:center;color: rgb(0, 0, 0);"><strong>CADASTRO DE PROJETO DE PESQUISA</strong></p>
							<div class="col-xs-6">
							</div>
						<hr>
					
					<div class="panel-body">

                        Título do Projeto:
                    <div class="form-group">
                    <input type="text" name="nome_projeto" tabindex="1" class="form-control" >
                    </div>
													
              	 Selecione o Grupo De Pesquisa:
                   <select class="form-control" name="grupoPesquisa">
                    <?php
                    echo '<option value="">Selecione..</option>';
                    foreach ($buscaBanco as $dados) {
                         
                    	 echo '<option value="' .$dados['id'].'">'.$dados['nome_grupo'].'</option>';
                     	 }
                     	 ?>
                     	  </select>

                    Selecione o docente:
                    <select class="form-control" name="docente">
                      <?php
                      echo '<option value="">Selecione..</option>';
                         foreach ($buscaBancoDocente as $dadosDocentes) {
                            
                    	   echo '<option value="' .$dadosDocentes['id'].'">'.$dadosDocentes['nome_docentes'].'</option>';
                     	 }
                      ?>
                    </select>              

                    Tipo do projeto de pesquisa:
                    <select class="form-control" name="bolsa" > 
                    <option value="">Selecione..</option>                     	
                      <option value="1">Voluntário</option>
                     	<option value="2">CNPQ</option>   
                        <option value="3">PIBIFSP</option>
                        <option value="4">Outros</option>       
                    </select>
                                   
                         Indique um orientador:
                         <select class="form-control" name="orientador">
                      <?php
                      $busca = $sql->query("SELECT * FROM docentes");
                      echo '<option value="">Selecione..</option>';
                         foreach ($busca as $dados1) {
                             
                           echo '<option value="' .$dados1['id'].'">'.$dados1['nome_docentes'].'</option>';
                         }
                      ?>
                    </select> <br><br><br>

                    <p style="font-size:150%; text-align:center;color: rgb(0, 0, 0);"><strong>CADASTRO DE DISCENTE</strong></p>


                    Nome do discente:
                    <div class="form-group">
                    <input type="text" name="discente" tabindex="1" class="form-control" >
                    </div>
                     Curso:
                    <div class="form-group">
                    <input type="text" name="curso" tabindex="1" class="form-control" >
                    </div>
                     Curriculo lattes:
                    <div class="form-group">
                    <input type="text" name="lattes" tabindex="1" class="form-control" >
                    </div>
                     Data de inserção no projeto:
                    <div class="form-group">
                    <input type="date" name="data_inicio" tabindex="1" class="form-control" >
                    </div>

</form>

<br><hr><br>
							<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">
											</div>
										</div>
									</div>
                                    </div>
                              
                        </div>
                     </div>
                </div>
    </div>
    </div>	
</body>
</html>


