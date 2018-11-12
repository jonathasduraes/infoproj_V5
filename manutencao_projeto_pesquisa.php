<?php
require'header_lider.php';
require 'php/conect.php';


$pesquisa = $sql->query("select nome_projeto,d.nome_docentes orientador, gp.nome_grupo, tb.nome_bolsa,di.nome_discente from projetopesquisa as p INNER JOIN docentes as d on  p.id_orientador = d.id
inner join grupopesquisa gp ON p.grupopesquisa_id = gp.id
inner join tipobolsa tb on p.tipobolsa_id = tb.id
INNER JOIN discente di on di.id 
GROUP by nome_projeto
");  
      
      if($pesquisa->rowCount() < 0){
         echo ' <center>  
        <br><h1>Não há docentes cadastrados</h1>
</center>
        ';
      }else{
          
          while( $linha = $pesquisa->fetch()) {  
           

?>
 

 <html lang='pt-br'> 
  <meta charset="utf-8">    
    <title>Manutenção projeto</title>
      
      <body>

        
      <div class="container">     
      <div style="float:left;"> 
          <div class="card" style="width:300px">
      
       <div class="card-body">
          <h4 class="card-title"> <?php echo "{$linha['nome_projeto'] }"  ?> </h4>
          <p class="card-text">  Orientador: <?php echo "{$linha['orientador']}" ?> </p>
          <p class="card-text">  Nome Grupo: <?php echo "{$linha['nome_grupo']}" ?> </p>
          <center>
          <a href='editar_projeto_pesquisa.php?nome_projeto=<?php echo $linha['nome_projeto']?> ' class="btn btn-primary">Editar</a>
          <a echo href='excluir_projetopesquisa.php?nome_projeto=<?php echo $linha['nome_projeto']?> ' class="btn btn-primary"> Excluir</a>
  
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
