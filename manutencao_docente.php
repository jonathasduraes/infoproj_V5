<?php
require'header_lider.php';
require 'php/conect.php';


$pesquisaBancoDocentes = $sql->query("SELECT * from docentes");  
      
      if($pesquisaBancoDocentes->rowCount() == 0){
         echo ' <center>  
        <br><h1>Não há docentes cadastrados</h1>
</center>
        ';
      }else{
          
          while( $linha = $pesquisaBancoDocentes->fetch()) {  
            $img = $linha['img'];

?>
 

 <html lang='pt-br'> 
  <meta charset="utf-8">    
    <title>Manutenção Docentes</title>
      
      <body>

        
      <div class="container">     
      <div style="float:left;"> 
          <div class="card" style="width:300px">
      
     <?php if ($img == true ) { echo '<img  height="250px"  alt="Card image" class="card-img-top" src="arquivoIMG/'.$img.'" />';}?> 
       <div class="card-body">
          <h4 class="card-title"> <?php echo "{$linha['nome_docentes'] }"  ?> </h4>
          <p class="card-text">   <?php echo "{$linha['lattes_docente']}" ?> </p>
          <center>
          <a href='editar_docente.php?id=<?php echo $linha['id']?> ' class="btn btn-primary">Editar</a>
          <a echo href='excluir_docente.php?id=<?php echo $linha['id']?> ' class="btn btn-primary"> Excluir</a>
  
  </center>
</div> 
</div>
</div>  
</div>
</div>

<style type="text/css">
div.card {
  
  margin: 15px;
}

</style>
        <?php       

}
}

               
        ?>
    
    
  </div>
</div>

     </body>
</html>
