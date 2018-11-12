<?php 

require'header_lider.php';
require 'php/conect.php';

$nome = $_GET['nome_projeto'];

$buscaBanco = $sql->query("select  nome_projeto,d.nome_docentes orientador, gp.nome_grupo, tb.nome_bolsa,di.nome_discente, de.nome_docentes from projetopesquisa as p INNER JOIN docentes as d on  p.id_orientador = d.id
inner join grupopesquisa gp ON p.grupopesquisa_id = gp.id
inner join tipobolsa tb on p.tipobolsa_id = tb.id
INNER JOIN discente di on di.id = p.dicente_id
inner join docentes de on de.id = p.docentes_id
 WHERE nome_projeto = '$nome' ");

foreach($buscaBanco as $resultadoBusca)
{}
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
    
    <title>Editar Projeto</title>    
        
<style class="cp-pen-styles"></style></head>
</head>
<body>
 <div class="col-md-6 col-md-offset-3">
  
   <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar projeto pesquisa</strong></p>


						<hr>
				
    <form method="post" role="form" action="editar_projeto_pesquisa2.php?nome_projeto=<?php echo $nome ?>" enctype="multipart/form-data" style="display: block;">

                                        <center> 
                                        
                                        
                                        </center>

                                        <div class="form-group">
                                        Nome do Projeto:
                                        <input type="text" name="nomeprojeto" tabindex="1" class="form-control" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_projeto']}" ?>"  >
                                       
                                        </div>
                                     Orientador atual    
                                    <input type="text"  class="form-control" name="textOrientador" value="<?php echo"{$resultadoBusca['orientador']}" ?>" disabled><br> 
                                       Orientador novo:(pode ser o mesmo)
                                       <select  class="form-control" name="orientador">
                                        <?php
                                                echo'<option value=""> Select...'.'</option>';
                                            $b = $sql->query("select * from docentes");
                                               foreach($b as $c){
                                    
                                        echo'<option value="'.$c['id'].'">'.$c['nome_docentes'].'</option>';
                                               }
                                        ?>
                                        
                                    </select><br>
                                    Grupo Atual:
                                    <input type="text" class="form-control" name="nomeDocente" tabindex="1" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_grupo']}" ?>" disabled ><br>
                                
                                     Grupo pesquisa novo:(pode ser o mesmo)
                                       <select  class="form-control" name="grupo">
                                        <?php
                                                echo'<option value=""> Select...'.'</option>';
                                            $b = $sql->query("select * from grupopesquisa");
                                               foreach($b as $c){
                                    
                                        echo'<option value="'.$c['id'].'">'.$c['nome_grupo'].'</option>';
                                               }
                                        ?>

                                    </select><br>
                                    
                                 Tipo de Bolsa:
                                    <input type="text" class="form-control" name="nomeDocente" tabindex="1" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_bolsa']}" ?>" disabled ><br>
                                
                                     Tipo de Bolsa novo:(pode ser o mesmo)
                                       <select  class="form-control" name="bolsa">
                                        <?php
                                                echo'<option value=""> Select...'.'</option>';
                                            $b = $sql->query("select * from tipobolsa");
                                               foreach($b as $c){
                                    
                                        echo'<option value="'.$c['id'].'">'.$c['nome_bolsa'].'</option>';
                                               }
                                        ?>
                                    </select><br>   
                                    
                                    
                                   Discente:
                                    <input type="text" class="form-control" name="nomeDocente" tabindex="1" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_discente']}" ?>" disabled ><br>
                                
                                     Discente novo:(pode ser o mesmo)
                                       <select  class="form-control" name="discente">
                                        <?php
                                                echo'<option value=""> Select...'.'</option>';
                                            $b = $sql->query("select * from discente");
                                               foreach($b as $c){
                                    
                                        echo'<option value="'.$c['id'].'">'.$c['nome_discente'].'</option>';
                                               }
                                        ?>
                                    </select><br>   
                                 
                                       Colaborador:
                                    <input type="text" class="form-control" name="nomeDocente" tabindex="1" placeholder="Nome Docente" value=" <?php echo "{$resultadoBusca['nome_docentes']}" ?>" disabled ><br>
                                
                                     Colaborado:(pode ser o mesmo ou vazio)
                                       <select  class="form-control" name="colaborador">
                                        <?php
                                                echo'<option value=""> Select...'.'</option>';
                                            $b = $sql->query("select * from docentes");
                                               foreach($b as $c){
                                    
                                        echo'<option value="'.$c['id'].'">'.$c['nome_docentes'].'</option>';
                                               }
                                        ?>
                                    </select><br>   
                                       
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