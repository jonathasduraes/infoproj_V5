<?php
require'php/conect.php';
    
    $pesquisar = $_POST['nome'];
    
    $result= $sql->query("SELECT * FROM linhapesquisa WHERE nome_linha LIKE '%$pesquisar%' LIMIT 5");
  
    foreach($result->fetchAll() as $rows)
    
    {
      
        echo 
            '<select>'
            "Nome do curso: ".$rows['nome_linha']."<br>";
    }



?>