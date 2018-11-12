<?php

require 'php/conect.php';

//----------------------------------------------- DISCENTE -----------------------------------------------

$nomeDiscente = $_POST['discente'];
$curso = $_POST['curso'];
$data_inicio = $_POST['data_inicio'];
$lattes = $_POST['lattes'];

// ------------ INSERE OS DADOS NA TABELA DISCENTE -------------
$insereDocente = $sql->query("INSERT INTO discente SET nome_discente = '$nomeDiscente', curso_dicente = '$curso', lattes_discente = '$lattes', data_inicio = '$data_inicio'  ");

// ----------- BUSCA OS DADOS DA TABELA DISCENTE -------------
$buscaDiscente = $sql->query("SELECT * FROM discente WHERE lattes_discente = '$lattes' ");
foreach ($buscaDiscente as $dado) {
	$Discente = $dado['lattes_discente'];
	$idDiscente = $dado['id'];
}
 
$idGrupoPesquisa = $_POST['grupoPesquisa'];
$idDocente = $_POST['docente'];
$bolsa = $_POST['bolsa'];
$idOrientador = $_POST['orientador'];
$nome_projeto = $_POST['nome_projeto'];

echo "Grupo: $idGrupoPesquisa <br>";
echo " Docente: $idDocente <br>";
echo " Bolsa: $bolsa <br>";
echo " Orientador: $idOrientador <br>";
echo "Nome projeto: $nome_projeto <br>";
echo "Nome discente: $nomeDiscente <br>";
echo "curso: $curso <br>";
echo "$data_inicio <br>";
echo "$lattes <br>";



// ------------ INSERE OS DADOS NA TABELA PROJETO -----------------
$insereProjeto = $sql->query("INSERT INTO projetopesquisa SET id_orientador = '$idOrientador', grupopesquisa_id = '$idGrupoPesquisa', docentes_id = '$idDocente', tipobolsa_id = '$bolsa', dicente_id = '$idDiscente', nome_projeto = '$nome_projeto' ");

header("Location: index_lider.php");

?>