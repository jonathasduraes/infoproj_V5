<?php 

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['id'];

$buscaBanco = $sql->query("SELECT * FROM tecnico WHERE id = '$nome' ");

foreach ($buscaBanco as $resultadoBusca ) {


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
  
   <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar técnico</strong></p>


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
                                    <form method="post" role="form" action="editar_tecnico2.php?id=<?php echo $nome;?>" enctype="multipart/form-data" style="display: block;">

                                        <center> 
                                        <div class="form-group">
                                            <?php if ($img == true ) { echo '<img height="250px" width="250px" src="arquivoIMG/'.$img.'" />';}?>
                                        </div>
                                        <div class="form-group">                                           
                                            Foto: <input type="file" name="img">
                                        </div>
                                        </center>

                                        <div class="form-group">
                                           Nome Técnico: <input type="text" name="nomeTecnico" tabindex="1" class="form-control"  value=" <?php echo "{$resultadoBusca['nome_tecnico']}" ?>">
                                        </div>
                                       
                                        <div class="form-group">
                                            Lattes Técnico: <input type="text" name="linkLattes"  tabindex="3" class="form-control" placeholder="Sigla do Grupo" value="<?php echo "{$resultadoBusca['lattes_tecnico'] }" ?>">
                                        </div>
                                        <div class="form-group">
                                            Atividade: <input type="text" name="atvRealizada"  tabindex="4" class="form-control" placeholder="Link" value="<?php echo "{$resultadoBusca['atividade'] }" ?>">
                                        </div>
                                        <div class="form-group">
                                            Formação: <input type="text" name="formacaoTecnico"  tabindex="5" class="form-control" placeholder="E-mail" value="<?php echo "{$resultadoBusca['formacao'] }" ?>">
                                        </div>
                                        <div class="form-group">
                                            Ano Conclusao: <input type="text" name="anoConclusao"  tabindex="7" class="form-control" placeholder="Texto" value="<?php echo "{$resultadoBusca['ano_conclusao'] }" ?>" >
                                        </div>
                                              <div class="form-group">
                                            Data De Entrada No Grupo: <input type="date" name="entradaGrupo"  tabindex="7" class="form-control" placeholder="Texto" value="<?php echo "{$resultadoBusca['data_inicio'] }" ?>" >
                                        </div>

                                        <div class="form-group">
                                            Data De Saída Do Grupo: <input type="date" name="saidadaGrupo"  tabindex="7" class="form-control" placeholder="Texto" value="<?php echo "{$resultadoBusca['data_fim'] }" ?>" >
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

