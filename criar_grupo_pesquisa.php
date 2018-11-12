<?php  
    require'header_adm.php';
    require 'php/conect.php';
    date_default_timezone_set("America/Sao_Paulo");

if(isset($_POST['nome']) && empty($_POST['nome'])==false){
    $nome = addslashes ($_POST['nome']);
    $lider = addslashes($_POST['lider']);
    $sigla = addslashes($_POST['sigla']);
    
   
    
//INSERT INTO `grupopesquisa`( `nomeGrupo`, `sigla_grupo`, `data_criacao`, `lider_id`, `situacao_id`) VALUES ("get", "gt", "2018-09-30 00:41:21" , 1, 1)



    $sql->query("INSERT INTO grupopesquisa SET nome_grupo ='$nome' , lider_id ='$lider', sigla_grupo = '$sigla', data_criacao = NOW(), situacao_id = '3'");
}

   ?>
                                        
<!DOCTYPE html>
<html lang="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <style type="text/css"></style>

<body>
          
          <div class="container">
    	
			<div class="col-md-6 col-md-offset-3">
				
                             <div class="text-center mb-4">
                            
           <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Criar Grupo de Pesquisa</strong></p>

    	
						<hr>
                </div>
                                 
				
					
	
                                    <form method="post" action="criar_grupo_pesquisa.php" role="form" style="display: block;">
                                        <div class="form-group">
                                          
                                                                               
                                            <input type="text" name="nome" tabindex="1" class="form-control" placeholder="Nome">
                                        </div>
                                           
                                        <div class="form-group">
                                            <input type="text" name="sigla"  tabindex="2" class="form-control" placeholder="Sigla do Grupo">
                                        </div>
                                        
                                        <div class="form-group">
                                           <select name="lider" class="form-control">       
                                            <?php 
                                                   $pdo=$sql->query("SELECT usuario.nome,grupopesquisa.lider_id FROM grupopesquisa inner JOIN  usuario on grupopesquisa.lider_id = usuario.id ");

                                                   if($pdo->rowCount()>0){
                                                      $dado = $pdo->fetch();
                                                      }
                                                     
                                                 ?> 
                                                 <?php
                                             
                                                $se= $sql->query("select id,nome from usuario");
                                             foreach($se as $b)                                      
                                                                                                                                   
                                            echo'<option value="'.$b['id'] .'" >'.$b['nome'].'</option>';                                               
                                         ?> 
                                          </select>
                                        </div>
                                           <div>
                                            <input type="submit" value = "Salvar" class="form-control btn btn-register" >
                                        </div>
                                        </form>
                                </div>
                            </div>
                </div>
    </body>
</html>
                      