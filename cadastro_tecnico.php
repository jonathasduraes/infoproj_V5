<?php
require 'header_lider.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
        
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        
    <title>Primeiro Cadastro</title>
  
</head>
<body>
<br><br><br>
							
						
					<div class="panel-body">
	
							<div class="col-md-6 offset-md-3">
								<form action="confirmacao_cadastro_tecnico.php" method="POST" role="form"  enctype="multipart/form-data" style="display: block; ">
									
									<div class="form-group">                                           
                                            Foto: <input type="file" name="img">
                                        </div>
									<div class="form-group">
									Nome:
										<input type="text" name="nome" tabindex="1" class="form-control" placeholder="Nome Técnico" >
									</div>

									
									<div class="form-group">
										Curriculo Lattes:
										<input type="text" name="linkLattes" tabindex="1" class="form-control" placeholder="Link Lattes" >
									</div>

									<div class="form-group">
									    Atividade Realizada:
										<input type="text" name="atvRealizada" tabindex="1" class="form-control" placeholder="Atividade realizada" >
									</div>

									<div class="form-group">
									Formação Técnica:
										<input type="text" name="formacaoTecnico" tabindex="1" class="form-control" placeholder="Formação máxima" >
									</div>

									<div class="form-group">
									Curso Superior:
										<input type="text" name="cursoSuperior" tabindex="1" class="form-control" placeholder="Curso Superior" >
									</div>

									<div class="form-group">
										Ano conclusão do curso: <input type="date" name="anoConclusao" tabindex="1" class="form-control" placeholder="Ano de conclusão curso" >
									</div>

									<div class="form-group" >
										Data de inclusão no grupo: <input type="date" name="inclusaoGrupo" tabindex="1" class="form-control" placeholder="Data inclusão no grupo" >
									</div>

									
									       
                   
               <br>	
												<input type="submit"  class="form-control btn btn-register" value="Cadastrar">
										
							</form>									
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

