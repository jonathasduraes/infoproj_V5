<?php         
    require 'php/conect.php';
$id= 0;

if(isset($_GET['id']) && empty($_GET['id'])==false){
    $id=addslashes($_GET['id']);
}
    $busca = $sql->query("SELECT * FROM usuario where id = '$id'");
    if($busca->rowCount()>0){
       $dado = $busca->fetch();
              $permissao = $dado['permissao_id'];    
  
    
    if(isset($_POST['nome']) && empty($_POST['nome']) ==false ){
        
     $img = strtolower(substr($_FILES['img']['name'],-4));
     $pront = addslashes($_POST['prontuario']);
     $nome = addslashes($_POST['nome']);
     $email = addslashes($_POST['email']);
     $lattes = addslashes($_POST['lattes']);
     $senha = addslashes($_POST['senha']);        
     $novo_nome = md5(time()).$img;
     $diretorio = "arquivoIMG/";
        move_uploaded_file($_FILES['img']['tmp_name'],$diretorio.$novo_nome);       
            
        $id = $dado['id'];
        if($_FILES['img']['name'] == ""){
            
              $p = $sql->query("UPDATE usuario SET nome ='$nome' ,email ='$email',senha ='$senha', prontuario = '$pront', lattes = '$lattes' WHERE id ='$id'");
        
        }else{
           
              $p = $sql->query("UPDATE usuario SET nome ='$nome' ,email ='$email',senha ='$senha', prontuario = '$pront', img='$novo_nome', lattes = '$lattes' WHERE id ='$id'");
        }
   if($permissao == 1){
        header("Location: index_adm.php");
    }else{
        header("Location: index_lider.php");
    }
        
        
  }
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
       <style type="text/css">
        
    </style>    
    
    <title>Complete seu Cadastro</title>

<head>

</head>
<body>
     <div class="col-md-6 col-md-offset-3">
                                    <div class="text-center mb-4">
    <p style="font-size:200%; text-align:center;color: rgb(0, 0, 0);"><strong>Complete seu Cadastro</strong></p>


            <hr>
         </div>
                <form method="post" role="form" style="display: block;"  enctype="multipart/form-data" >
                                        
                                        <div class="form-group">
                                           
                                            Foto: 
                                            <input type="file"  name="img" >
                                        </div>

                                        <div class="form-group">
                                           Prontuario:
                                            <input type="text" name="prontuario" tabindex="1" class="form-control" placeholder="Prontuario" value="<?php echo $dado['prontuario'] ?>">
                                        </div>
                                           
                                        <div class="form-group">
                                          Nome:                                 
                                        <input type="text" name="nome"  tabindex="2" class="form-control" placeholder="Nome" value="<?php echo $dado['nome'] ?>" >
                                        </div>
                                        <div class="form-group">
                                           E-mail:
                                            <input type="email" name="email"  tabindex="3" class="form-control" placeholder="Email" value="<?php echo $dado['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                           Curriculo Lattes: 
                                            <input type="text" name="lattes" placeholder="Curriculo Lattes"  tabindex="3" class="form-control" placeholder="Email"value="<?php echo $dado['lattes'] ?>">
                                        </div>
                                               <div class="form-group">
                                               Senha: 
                                            <input type="password" name="senha" placeholder="senha"  tabindex="3" class="form-control" placeholder="Email"value="<?php echo $dado['senha'] ?>">
                                        </div>                             
                                        <div >
                                                <input type="submit" value = "Salvar" class="form-control btn btn-register">
                                                </div>
                                        </form>
         </div>
 
                   
    </body>
</html>