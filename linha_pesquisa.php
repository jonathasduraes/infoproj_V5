<?php

require 'php/conect.php';
require 'header_lider.php';

    
?>


<html lang="pt-br">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">   
</head>
<body><div class="container">
  <h1 class="page-header">Linha de Pesquisa</h1><br>
  <div class="table-responsive">
       
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>        
          <th>Codigo</th>
          <th>Nome</th>
   
          <th>Edições</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
          
     $pdo= $sql->query("SELECT cod_linha, nome_linha FROM linhapesquisa ORDER BY cod_linha");
  
      
      if($pdo->rowCount() > 0){
          
          foreach($pdo->fetchAll() as $usuario) {  
          echo '<tr>'; 
          echo '<td>'.$usuario['cod_linha'].'</td>';
          echo '<td>'.$usuario['nome_linha'].'</td>'; 
          echo '<td><a href="editar_linhapesquisa.php?cod_linha='.$usuario['cod_linha'].'">Editar</a>'.'-<a href ="excluir_linha.php?cod_linha='.$usuario['cod_linha'].'">Excluir</a>';
          echo'</tr>';
          }
      }
            
        ?>
        </tr>
        <tr>
      </tbody>
    </table>
    
  </div>
</div>
    </body>
</html>