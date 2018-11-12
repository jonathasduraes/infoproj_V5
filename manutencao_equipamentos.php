<?php
require'header_lider.php';
require 'php/conect.php';

$pesquisaBancoEquipamentos = $sql->query("SELECT * from equipamentos");  
      
      if($pesquisaBancoEquipamentos->rowCount() < 0){
        echo ' <center>  
        <br><h1>Não há equipamentos cadastrados</h1>
</center>
        ';
      }else{
          
          while( $linha = $pesquisaBancoEquipamentos->fetch()) {  
?>

 <html lang='pt-br'> 
  <meta charset="utf-8">    
    <title>Manutencao Equipamentos</title>
      <body>
        <div class="container">
     <form action="" method="POST">   
        <div style="float:left;"> 
          <div class="card" style="width:500px">

          <div class="card-body">
          <h2 class="card-title"> <?php echo "{$linha['nome_equipamento'] }"  ?> </h2>
          <p class="card-text"> <b>Descrição:</b> <?php echo"{$linha['descricao']}" ?> </p>
          <p class="card-text"> <b>Data Inserção:</b> <?php echo "{$linha['data_inicio']}"?> </p>
          <p class="card-text"> <b>Data Remoção:</b> <?php $data_remocao = $linha['data_remocao']; if ($data_remocao == NULL) { echo "Não removido ainda"; }else{ echo "{$linha['data_remocao']}";};?> </p>
          <center>
          <a echo href='editar_equipamento.php?nome=<?php echo $linha['nome_equipamento']?> ' class="btn btn-primary"> Editar</a> 
          <a echo href='excluir_equipamento.php?nome=<?php echo $linha['nome_equipamento']?> ' class="btn btn-primary"> Excluir</a>
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
