<?php
require'header_lider.php';
require 'php/conect.php';


$pesquisaBancoTecnico = $sql->query("SELECT * from tecnico");  
      
      if($pesquisaBancoTecnico->rowCount() == 0){
        echo ' <center>  
        <br><h1>Não há técnicos cadastrados</h1>
</center>
        ';
      }else{
          
          while( $linha = $pesquisaBancoTecnico->fetch()) {  
            $img = $linha['img'];

?>

 <html lang='pt-br'> 
  <meta charset="utf-8">    
    <title>Manutenção Técnico</title>
      <body>
        <div class="container">
     <form action="editar_tecnico.php" method="POST">   
        <div style="float:left;"> 
          <div class="card" style="width:300px">
      
     <?php if ($img == true ) { echo '<img  height="250px"  alt="Card image" class="card-img-top" src="arquivoIMG/'.$img.'" />';}?> 
       <div class="card-body">
          <h4 class="card-title"> <?php echo "{$linha['nome_tecnico'] }"  ?> </h4>
          <p class="card-text">   <?php echo "{$linha['lattes_tecnico']}" ?> </p>
          <h4 class="card-text">  <?php echo "{$linha['atividade']}"      ?> </h4>
          <center>
          <a echo href='editar_tecnico.php?id=<?php echo $linha['id']?> ' class="btn btn-primary"> Editar</a> 
          <a echo href='excluir_tecnico.php?nome=<?php echo $linha['nome_tecnico']?> ' class="btn btn-primary"> Excluir</a>
       </center>
       </div> 
</div>
</div>  


</div>

<style type="text/css">
div.card {  
  margin: 15px;
}

</style>
</form>

        <?php       

}
}

               
        ?>
    
    
  </div>
</div>

     </body>
</html>
