<?php
require 'header_lider.php';
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
        
    </style>    
</head>
<body>
                       <div class="col-sm-6 col-sm-offset-3">
                        <center>
                            <p style="font-size:150%; text-align:center;color: rgb(0, 0, 0);"><strong>CADASTRO</strong></p>
							
							</center>
						<hr>
					
								<form action="confirmacao_cadastro_equipamento.php" method="POST" role="form"  enctype="multipart/form-data" style="display: block; ">
									
									<div class="form-group">
										Nome do equipamento: <input type="text" name="nomeEquipamento" tabindex="1" class="form-control"  >
									</div>

									
									<div class="form-group">
										Descrição do equipamento: <input type="text" name="descEquip" tabindex="1" class="form-control" >
									</div>

									<div class="form-group">
										Data inserção no projeto: <input type="date" name="dataInsercao" tabindex="1" class="form-control"  >
									</div>
<hr>
							
											
												<input type="submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">
											</div>
							                                  
							</form>									
		
</body>
</html>

