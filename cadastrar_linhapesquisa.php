<?php
require'php/conect.php';
require 'header_lider.php';
?>

<html lang="br">
<head>
    <meta charset="UTF-8">
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <title>Cadastrar Linha pesquisa</title>
</head>
<body>
<div class="panel-body"><br><br>
   
    <div class="col-md-6 offset-md-3">
<form method="post" style="display: block;" >
    

     <?php
      echo "Grande área:";     
    echo'<select name="c1" class="form-control" >';
      echo'<option value"">Select....</option>';
        $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 2, 6) = '000000'");      
    foreach($pdo as $d)  {  
    echo'<option value="'.$d['cod_linha'] .'" >'.$d['nome_linha'].'</option>' ;
    
    }    
      echo'</select>'; 
        ?>
         <input type="submit" nome="enviar" class="btn btn-success"><br> 
    <?php        
            //ciencias exatas e da terra
   echo "<br>";
   echo "Área:";
            echo'<select name ="c2" class="form-control">' ;
                $cod = $_POST['c1'];
                if($cod == 1000000)
                {  
                    
                    $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 1,8");  
                    if($pdo->rowCount()>0){
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
                    }
                }
            //ciencias biologica
            elseif($cod == 2000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 10,13");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        }
            }
            //engenharias
            elseif($cod == 3000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 24,13");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }
            //ciencia da saude
            elseif($cod == 4000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 38,9");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }
            //ciencias agrarias
             elseif($cod == 5000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 48,7");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }
            //ciencias sociais aplicada
            elseif($cod == 6000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 56,13");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }
            //ciencias humana
            elseif($cod == 7000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 70,10");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }
                //LINGUÍSTICA - LETRAS E ARTES
            elseif($cod == 8000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 81,3");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        }         
                }
            //MULTIDISCIPLINAR
            elseif($cod == 9000000) {    
                $pdo=$sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 4, 4) = '0000' LIMIT 85,5");
                        foreach($pdo as $de){
                            echo'<option value="'.$de['cod_linha'] .'" >'.$de['nome_linha'].'</option>'; 
                        } 
        
                }

    echo '</select>';
            
    echo'<input type="submit" name="enviar" class="btn btn-success"> ';
    echo "<br>";
    ?>
        
       <?php
    //matematica
       echo "<br>";
       echo "Sub-Área:";
        echo'<select name ="c3" class="form-control" >';
        $c2 = $_POST['c2'];
        if($c2 == 1010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 2,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>'; 
            
                
            
        }
        }
    //probabilidade e estatistica
    if($c2 == 1020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 6,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //ciencia da computação
    if($c2 == 1030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 10,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //astronomia
    if($c2 == 1040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 15,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //fisica
    if($c2 == 1050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 22,7");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 1060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 30,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //geociencia
    if($c2 == 1070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 35,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //ocaeonografia
    if($c2 == 1080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 41,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //categoria 20000000
    //ciencias biologicas
    //biologia geral
    if($c2 == 2010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 46,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //genetica
    if($c2 == 2020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 48,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //botanica
    if($c2 == 2030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 55,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 2040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 62,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //ecologia
    if($c2 == 2050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 69,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //morfologia
     if($c2 == 2060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 73,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //fisiologia
     if($c2 == 2070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 78,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //bioquimica
     if($c2 == 2080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 83,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //biofisica
     if($c2 == 2090000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 89,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //farmacologia
     if($c2 == 2100000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 94,8");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //imunologia
     if($c2 == 2110000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 103,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //microbiologia
    if($c2 == 2120000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 108,2");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //parasitologia
    if($c2 == 2130000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 111,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //30000000 egenharias
    //engenharia civil
    if($c2 == 3010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 116,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 3020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 122,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 3030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 126,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 132,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    
    if($c2 == 3050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 139,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    
     if($c2 == 3060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 145,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 149,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 154,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3090000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 159,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3100000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 164,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3110000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 168,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3120000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 174,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 3130000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 181,2");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    
     if($c2 == 4010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 185,7");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 193,9");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 203,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 209,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 216,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 221,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 224,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 225,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 4090000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 226,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    
    //50000000 ciencias agrárias
     if($c2 == 5010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 229,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 5020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 236,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    
    if($c2 == 5030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 243,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 5040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 249,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 5050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 255,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 5060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 261,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
        if($c2 == 5070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 266,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    //6000000 ciencias sociais aplicadas
    //Direito
        if($c2 == 6010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 271,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        } if($c2 == 6020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 276,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 6030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 281,10");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 6040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 292,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 6050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 297,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
     if($c2 == 6060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 301,7");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 309,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 312,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6090000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 314,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6100000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 320,2");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6110000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 322,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6120000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 324,2");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 6130000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 326,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 329,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 336,7");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 344,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 350,3");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 354,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7060000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 361,2");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7070000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 364,10");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7080000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 375,7");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7090000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 383,5");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 7100000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 389,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 8010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 395,6");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 8020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 402,10");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 8030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 413,10");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 9010000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 424,4");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 9020000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 430,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 9030000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 431,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 9040000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 432,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
        }
    if($c2 == 9050000) 
        {
            $cod2 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6, 2) = '00' LIMIT 433,1");
        foreach($cod2 as $d2){
          
            echo'<option value="'.$d2['cod_linha'] .'" >'.$d2['nome_linha'].'</option>';            
        }
    }
echo '</select>';
     echo'<input type="submit" nome="enviar" class="btn btn-success">';
       //fim da camada c3 
    ?>
        </form>
<form action="cadastrar_grupopesquisa_linhapesquisa.php" method="post">
        <?php
        echo "<br>";
        echo "Especialidade:";
        echo '<select name="c4" class="form-control">';
    
        $c3 = $_POST['c3'];
        if($c3 == 1010100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 3,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1010200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 10,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1010300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 17,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1010400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 24,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1020000) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 28,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
     if($c3 == 1020200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 35,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
     if($c3 == 1020300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 43,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
     if($c3 == 1030100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 46,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1030200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 51,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1030300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 54,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1030400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 60,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 66,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 68,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 70,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 73,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 78,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1040600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 82,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    
    if($c3 == 1050100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 88,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 95,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 102,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 107,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 114,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 121,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1050700) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 124,17");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1060100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 135,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1060200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 143,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }if($c3 == 1060300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 151,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1060400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 160,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1070100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 169,14");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1070200) 
        {
        $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 179,9");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1070300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 189,9");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1070400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 199,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    
    
    if($c3 == 1070500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 205,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1080100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 214,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1080200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 216,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1080300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 222,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 1080400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 225,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
    
        }
    if($c3 == 2010000) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 230,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 232,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 233,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 234,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 235,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 236,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2020600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 237,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 239,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 241,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 246,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 250,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 252,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2030600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 253,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    
    if($c3 == 2040100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 255,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2040200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 256,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2040300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 257,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2040400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 258,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2040500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 259,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2040600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 261,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2050100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 265,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2050200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 266,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2050300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 267,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
     if($c3 == 2060100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 269,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2060200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 270,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2060300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 271,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2060400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 273,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2070100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 276,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2070200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 278,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2070300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 285,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2070400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 286,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2080100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 289,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2080200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 292,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
        if($c3 == 2080300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 293,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
        if($c3 == 2080400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 294,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
        if($c3 == 2080500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 295,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
        if($c3 == 2090100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 297,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2090200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 298,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2090300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 299,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2090400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 300,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 303,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 305,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 306,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 307,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 308,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 309,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100700) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 310,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2100800) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 311,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    
    //2110100
        if($c3 == 2110100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 313,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2110200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 314,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2110300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 315,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2110600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 316,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2120100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 319,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2120200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 323,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2130100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 327,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2130200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 330,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
    if($c3 == 2130300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 332,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
       if($c3 == 3010100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 336,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
            
        }
    
        }
         if($c3 == 3010200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 340,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
        }
         }
            if($c3 == 3010300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 345,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 3010400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 351,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3010500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 354,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3020100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 360,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3020200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 363,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3020300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 367,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 3030100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 371,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3030200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 374,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3030300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 380,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3030400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 388,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3030500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 393,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3040100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 400,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3040200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 407,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
    if($c3 == 3040300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 413,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
    if($c3 == 3040400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 418,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3040500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 425,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }if($c3 == 3040600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 429,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3050100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 433,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3050200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 438,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3050300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 443,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3050400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 448,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3050500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 457,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3060100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 464,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3060200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 468,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3060300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 486,21");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3070100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 483,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3070200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 497,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 3070300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 498,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3070400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 505,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3080100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 513,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3080200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 519,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3080300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 525,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3080400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 531,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3090100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 539,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
   if($c3 == 3090200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 543,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3090300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 546,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3090400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 551,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3100100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 560,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3100200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 563,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3100300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 568,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3110100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 573,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3110200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 576,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3110300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 580,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3110400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 585,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3110500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 589,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3120100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 595,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 3120200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 598,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3120300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 601,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 3120400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 604,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 3120500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 606,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3120600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 611,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 3130100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 620,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 3130200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) = '0' LIMIT 624,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4010100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 657,18");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 4010200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 676,14");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 4010300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 690,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 4010400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 691,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4010500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 692,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4010600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 693,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4010700) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 694,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4020100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 696,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4020200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 697,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4020300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 698,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4020400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 699,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 4020500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 700,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4020600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 701,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4020700) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 702,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4020800) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 703,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4020900) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 704,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
    if($c3 == 4030100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 706,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4030200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 707,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4030300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 708,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4030400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 709,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4030500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 710,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 712,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 713,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 714,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 715,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 716,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4040600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 717,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4050100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 719,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4050200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 720,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4050300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 721,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4050400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 722,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4060100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 724,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4060200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 725,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4060300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 726,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4070000) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 727,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4080000) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 728,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 4090000) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 729,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 733,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 740,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 746,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 754,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 757,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5010600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 758,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5020100) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 761,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5020200) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 770,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5020300) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 777,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5020400) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 780,9");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5020500) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 789,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5020600) 
        {
            $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 793,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5030100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 796,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 5030200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 798,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 5030300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 800,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5030400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 804,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5030500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 807,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5040100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 810,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5040200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 811,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5040300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 813,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5040400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 817,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5040500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 823,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5050100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 828,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
      if($c3 == 5050200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 837,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5050300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 843,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5050400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 847,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5050500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 850,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5060100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 853,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5060200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 858,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5060300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 863,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5060400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 867,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 5070100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 869,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5070200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 877,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 5070300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 884,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6010100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 890,8");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6010200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 899,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6010300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 907,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6010400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 911,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
       if($c3 == 6020100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 914,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
       if($c3 == 6020200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 920,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6020300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 924,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6020400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 925,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6030100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 928,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 934,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 939,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 944,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 949,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 954,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 960,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030800) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 963,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6030900) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 966,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6031000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 970,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6040100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 974,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 6040200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 979,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 6040300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 983,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 6040400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 985,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6050100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 991,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6050200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 996,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6050300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1001,9");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6060100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1012,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1016,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1020,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1024,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1027,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1031,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6060700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1034,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6070100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1037,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6070200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1041,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6070300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1046,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6080000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1047,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6090100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1048,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6090200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1050,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6090300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1055,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6090500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1057,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 6090600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1058,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
    if($c3 == 6100100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1060,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6100200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1062,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6110000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1069,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6120100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1070,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6120200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1071,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 6130000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1072,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
         if($c3 == 7010100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1075,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7010200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1076,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7010300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1077,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7010400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1078,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7010500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1079,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7010600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1080,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7020100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1083,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7020200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1085,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7020300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1086,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7020400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1087,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7020500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1088,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 7020600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1089,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 7020700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1090,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 7030100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1092,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7030200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1093,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7030300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1094,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7030400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1095,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7030500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1096,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7040100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1098,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7040200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1099,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7040300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1100,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1102,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1103,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1104,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1106,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1109,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7050600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1113,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7060100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1116,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7060200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1122,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1127,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1132,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1137,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1142,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1145,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1148,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1150,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070800) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1153,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7070900) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1159,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7071000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1165,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7080100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1173,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 7080200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1180,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }    if($c3 == 7080300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1183,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 7080400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1187,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 7080500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1192,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 7080600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1195,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
        if($c3 == 7080700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1198,7");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7090100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1208,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7090200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1213,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7090300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1219,5");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7090400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1225,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7090500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1229,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7100100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1234,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7100200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1235,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7100300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1236,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 7100400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1237,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1239,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1240,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1241,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1242,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1243,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8010600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1244,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8020100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1246,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1247,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1248,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1249,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1250,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1251,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
     if($c3 == 8020700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1252,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8020800) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1253,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8020900) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1254,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8021000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1255,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
    if($c3 == 8030100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1258,3");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1262,6");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1269,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030400) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1274,2");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030500) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1277,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030600) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1281,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030700) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1282,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030800) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1284,4");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8030900) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1288,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 8031000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1289,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9010100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1292,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9010200) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1293,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9010300) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1294,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9010100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1295,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9020100) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1297,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9030000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1298,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9040000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1299,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    if($c3 == 9050000) 
        {
           $cod3 = $sql->query("select SUBSTRING(LP.cod_linha, 1, 7) as cod_linha,LP.nome_linha from linhapesquisa LP where SUBSTRING(LP.cod_linha , 6,1) >= '0' LIMIT 1300,1");
        foreach($cod3 as $d3){
          
            echo'<option value="'.$d3['cod_linha'] .'" >'.$d3['nome_linha'].'</option>'; 
    
        }
        }
    
        echo'</select><br>';

    ?>   
   
      <?php
      echo "Grupo Pesquisa:";
         echo'<select name="c5" class="form-control" >';
    $pdo=$sql->query("SELECT id,nome_grupo from grupopesquisa");
    foreach($pdo as $grupo)
    echo'<option value="'.$grupo['id'].'">'.$grupo['nome_grupo'].'</option>';
    echo'</select><br>';
    
   
    echo'</select><br>';
    
    echo "Docente responsável:";
     echo'<select name="c7" class="form-control" >';
    $pdo=$sql->query("SELECT id,nome_docentes from docentes");
    foreach($pdo as $grupo)
    echo'<option value="'.$grupo['id'].'">'.$grupo['nome_docentes'].'</option>';
    echo'</select><br>';
    
        ?>
     
     <input type="submit" value="Salvar" class="form-control btn btn-register" >
      </form>
      
        </div> 
    </div>   
</body>
</html>