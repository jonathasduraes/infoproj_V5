<?php 

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['id'];

$buscaBanco = $sql->query("SELECT * FROM docentes WHERE id = '$nome' ");

foreach ($buscaBanco as $resultadoBusca) {


$img = $resultadoBusca['img'];
}
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
    
    <title>Editar</title>    
        
<style class="cp-pen-styles"></style></head>
</head>
<body>
 <div class="col-md-6 col-md-offset-3">
  
   <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar Docentes</strong></p>


						<hr>
				
    <form method="post" role="form" action="editar_docente2.php?id=<?php echo $nome;?>" enctype="multipart/form-data" style="display: block;">

                                        <center> 
                                        <div class="form-group">
                                            <?php  echo '<img height="250px" width="250px" src="arquivoIMG/'.$img.'" />';?>
                                        </div>
                                        <div class="form-group">                                           
                                            Foto: <input type="file" name="img">
                                        </div>
                                        </center>

                                        <div class="form-group">
                                        <input type="text" name="nomeDocente" tabindex="1" class="form-control" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_docentes']}" ?>" >
                                        </div>

                                    
                                    <div class="form-group">
                                        <input type="text" name="lattesDocente" tabindex="1" class="form-control" placeholder="Link Lattes" value="<?php echo "{$resultadoBusca['lattes_docente'] }" ?>" >
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="text" name="cursoDocente" tabindex="1" class="form-control" placeholder="Curso"  value="<?php echo "{$resultadoBusca['curso'] }" ?>">
                                    </div> 

                                        <div>
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Salvar"><br><br><br><BR>
                                        </div>
                                        </form>
                                </div>
                            </div>
                            </div>
                            </div>
    </body>
</html>