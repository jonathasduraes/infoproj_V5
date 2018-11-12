<?php
require'php/conect.php';
require'header_lider.php';

$id= 0;

if(isset($_GET['cod_linha']) && empty($_GET['cod_linha'])==false){
    $id=addslashes($_GET['cod_linha']);
}
    
if(empty($_POST['nome'])==false){
    $nome = addslashes($_POST['nome']);
    $sql->query("UPDATE linhapesquisa SET nome_linha ='$nome' where cod_linha = $id "); 

  

}

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    
    <title>Editar Linha de Pesquisa</title>
</head>
<body>
  
     <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar Linha de Pesquisa</strong></p>

<div class="col-md-6 offset-md-3">
    	<div class="row">
			                 <div class="text-center mb-4">
							<div class="col-xs-6">
							</div>
							
						</div>
						<hr>
					</div>
					
				<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" style="display: block;">
                                            
                                        <div class="form-group">      
                                            <?php 
                                                   $pdo=$sql->query("SELECT cod_linha,nome_linha FROM linhapesquisa where cod_linha = $id ");
                                                   if($pdo->rowCount()>0){
                                                     foreach($pdo as $dado)
                                                         $nomelinha = $dado['nome_linha'];
                                                      }
                                                 ?> 
                                        </div>
                                        
                                            <input type="text" name="nome"  tabindex="3" class="form-control" placeholder="Nome" value="<?php echo $nomelinha ?>"><BR>
                                   
                                        <input type="submit" value ="Salvar" class="form-control btn btn-register">
                                        </form>
                                </div>
                            </div>
                            </div>
    </div>
    
    
    
    
    
</body>
</html>