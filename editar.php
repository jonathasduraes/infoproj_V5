<?php                
    require 'php/conect.php';
  
$id= 0;
if(isset($_GET['id']) && empty($_GET['id'])==false){
    $id=addslashes($_GET['id']);
}
if(isset($_POST['lider']) && empty($_POST['lider'])==false){
    $nome = addslashes ($_POST['nome']);
    $lider = addslashes($_POST['lider']);
    $sigla = addslashes($_POST['sigla']);
    $link = addslashes($_POST['link']);
    $texto = addslashes($_POST['texto']);
    $email = addslashes($_POST['email']);  
    $img = strtolower(substr($_FILES['img']['name'],-4));
    $novo_nome = md5(time()).$img;
    $diretorio = "arquivoIMG/";
        move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$novo_nome); 
  
        if($_FILES['img']['name'] == ""){
            
             $pdo=$sql->query("UPDATE grupopesquisa SET nome_grupo ='$nome' , lider_id ='$lider', sigla_grupo = '$sigla', link_lattes='$link', texto = '$texto' ,email ='$email', situacao_id = 1  WHERE id ='$id'");
    
              header("Location: grupo_pesquisa.php");
        
        }else{
             
            
              $pdo=$sql->query("UPDATE grupopesquisa SET nome_grupo ='$nome' , lider_id ='$lider', sigla_grupo = '$sigla', link_lattes='$link', texto = '$texto' ,email ='$email' , img = '$novo_nome',situacao_id = 1 WHERE id ='$id' ");
     
                 header("Location: grupo_pesquisa.php");
            
        }
}

$pdo=$sql->query("SELECT * FROM grupopesquisa WHERE id ='$id'");
    
if($pdo->rowCount()>0){
        $dado = $pdo->fetch();
   
    
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

</head>
<body>
  	<div class="col-md-6 col-md-offset-3">
				
                             <div class="text-center mb-4">
    <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Editar Grupo de Pesquisa</strong></p>
						<hr>
        </div>
                            
			
                                    <form method="post" role="form"  action="editar.php?id=<?php echo $id;?>" style="display: block;" enctype="multipart/form-data">
                                   <div class="form-group">
                                           
                                           <?php  
                                        $pdo=$sql->query("SELECT grupopesquisa.id,grupopesquisa.nome_grupo, usuario.nome,grupopesquisa.sigla_grupo, grupopesquisa.link_lattes, grupopesquisa.email,grupopesquisa.texto FROM grupopesquisa inner JOIN  usuario on grupopesquisa.lider_id = usuario.id ");
                                       
                                       
                                       if($pdo->rowCount()>0){
                                                      $dado = $pdo->fetch();
                                                      }
                                                     ?>
                                            Imagem do Grupo: 
                                            <input type="file"  name="img" >
                                        </div>
                                           
                                           Nome do Grupo:
                                            <input type="text" name="nome" tabindex="1" class="form-control" placeholder="Nome" value="<?php echo $dado['nome_grupo'] ?>"><br>
                                       
                                       Lider:
                                         <select name="lider" class="form-control">       
                                            <?php 
                                                  
                                                   
                                                 

                                                  
                                                 ?> 
                                                 <?php
                                             
                                                $se= $sql->query("select id,nome from usuario");
                                             foreach($se as $b)                                      
                                                                                                                                         
                                            echo'<option value="'.$b['id'] .'" >'.$b['nome'].'</option>';
                                             echo $lider;
                                         ?> 
                                          </select><br>
                                            
                                    
                                               Sigla:
                                            <input type="text" name="sigla"  tabindex="3" class="form-control" placeholder="Sigla do Grupo" value="<?php echo $dado['sigla_grupo'] ?>"><br>
                                               Curiculo Lattes
                                            <input type="text" name="link"  tabindex="4" class="form-control" placeholder="Link" value="<?php echo $dado['link_lattes'] ?>"><br>
                                            E-mail:
                                            <input type="text" name="email"  tabindex="5" class="form-control" placeholder="E-mail" value="<?php echo $dado['email'] ?>"><br>
                                            Texto:
                                            <input type="text" name="texto"  tabindex="7" class="form-control" placeholder="Texto" value="<?php echo $dado['texto'] ?>" ><br>
                                       
                                        <input type="submit" value = "Salvar" class="form-control btn btn-register">
                                      
                          
                                        </form>
    </div>
                         
    </body>
</html>
