<?php 

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['nome'];

$buscaBanco = $sql->query("SELECT * FROM equipamentos WHERE nome = '$nome' ");

foreach ($buscaBanco as $resultadoBusca ) {



}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
      <title>Cadastro equipamentos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
       <style type="text/css">
    
    <title>Editar</title>    
        
<style class="cp-pen-styles"></style></head>
</head>
<body>
  
   <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar equipamento</strong></p>


    	<div class="row">
			                 <div class="text-center mb-4">
							<div class="col-xs-6">
							</div>
							
						</div>
						<hr>
					</div>
					<div class="container">
				<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="editar_equipamento2.php?nome=<?php echo $nome;?>" style="display: block;">

                                        <div class="form-group">
                                           <b>Nome Equipamento:</b> <input type="text" name="nomeEquip" tabindex="1" class="form-control"  value=" <?php echo "{$resultadoBusca['nome']}" ?>">
                                        </div>
                                       
                                        <div class="form-group">
                                            <b>Descrição:</b> <input type="text" name="desc"  tabindex="3" class="form-control" value="<?php echo "{$resultadoBusca['descricao'] }" ?>">
                                        </div>
                                        <div class="form-group">
                                            <b>Data Inserção Do Grupo:</b> <input type="date" name="dataInsercao"  tabindex="4" class="form-control"  value="<?php echo "{$resultadoBusca['data_inicio'] }" ?>">
                                        </div>

                                        <div class="form-group">
                                            <b>Data Remoção Do Grupo:</b> <input type="date" name="dataRem"  tabindex="4" class="form-control"  >
                                        </div>

                                        <div>
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Salvar">
                                        </div>

                                        </form>
                                </div>
                            </div>
                            </div>
                            </div>
    </body>
</html>

