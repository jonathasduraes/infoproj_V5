<?php
require 'header_lider.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
        
    <title>Cadastro Docente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
       <style type="text/css">
        
    </style>    
</head>
<body>

			<div class="col-md-6 col-md-offset-3">
                            <p style="font-size:150%; text-align:center;color: rgb(0, 0, 0);"><strong>CADASTRO DOCENTE</strong></p>
						
							
						
						<hr>
					
								<form action="confirmacao_cadastro_docente.php" method="POST" role="form"  enctype="multipart/form-data" style="display: block; ">
									
									<div class="form-group">
										<input type="text" name="nome" tabindex="1" class="form-control" placeholder="Nome Docente" >
									</div>

									
									<div class="form-group">
										<input type="text" name="linkLattes" tabindex="1" class="form-control" placeholder="Link Lattes" >
									</div>

									
									<div class="form-group">
										<input type="text" name="curso" tabindex="1" class="form-control" placeholder="Curso" >
									</div>

									
									<div class="form-group">                                           
                                            Foto: <input type="file" name="img">
                                        </div>
									    
                   
               
<hr>
							
										
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">
                                    </div>
                                    
							</form>									

				
</body>
</html>

