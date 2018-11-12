<?php
require "php/conect.php";

 $ide = $_GET['id'];
		
$buscaGrupoPesquisa = $sql->query("SELECT * FROM grupopesquisa where id = '$ide'");

while ($linha = $buscaGrupoPesquisa->fetch()) {
    $img = $linha['img'];

    if ($linha['situacao_id'] == "1") {
    	$situacao = "Ativo";
    }
        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
<title>Pagina Inicial</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="pagina_geral.css"></script>
</head>
<body>

<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">

            <a href="projeto_espelho_grupo.php?id=<?php echo $ide?> "  >Projeto Pesquisa</a>

			<h1 align="center">Informações do grupo de pesquisa</h1>
			<br>
			<br>
			<br>
			<ul class="timeline"> 

        			<ul>
        			<li>
					<h1> <?php echo " {$linha['sigla_grupo']} -{$linha['nome_grupo']} - I.P  "?></h1>
					</li></ul>

					<ul>
        			
                    <div class="form-group">
                    <div style="float:left;">     
          <div class="card" style="width: 5rem;">
                        
                       
              <h4 class="card-text">
               <?php
                if ($img == true ) { 
                    echo '<img alt="Card image" class="card-img-top" height="50px" width="50px" src="arquivoIMG/'.$img.'" />';}?>
                        
                    </h4>
                      </div>
                        </div>
                          </div>
           
                          
                </ul>
            
                </li><br><br>

        			<ul>
        			<li>
					<a>Situação do grupo: <?php echo $situacao ?> </a>
					</li></ul>

					<ul>
        			<li>
					<a>Data de formação: <?php echo "{$linha['data_criacao']} "?> </a>
					</li></ul>
					
					<ul>
        			<li>
					<a>Líder do grupo: <?php echo "{$linha['lider_id']}"?> </a>
					</li></ul>

					<ul>
        			<li>
					<a>Sigla do grupo: <?php echo "{$linha['sigla_grupo']}"?> </a>
					</li></ul>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>

<?php

}
?>
