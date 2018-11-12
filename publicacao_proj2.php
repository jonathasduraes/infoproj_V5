<?php
require 'php/conect.php';

$projetoPesquisa = $_POST['projetoPesquisa']; //ok
$titulo_publicacao = $_POST['titulo_publicacao']; //ok
$data_publicacao = $_POST['data_publicacao'];//ok
$linha_pesquisa = $_POST['linha_pesquisa'];
$referencia = $_POST['referencia']; //ok
$publicacao = $_POST['publicacao'];
$tipo_publicacao = $_POST['tipo_publicacao'];//ok
$docente = $_POST['docente'];//ok

/*echo "Projeto pesquisa = $projetoPesquisa<br>";
echo "Titulo Publicacao = $titulo_publicacao<br>";
echo "data_publicacao = $data_publicacao<br>";
echo "linha_pesquisa = $linha_pesquisa<br>";
echo "referencia = $referencia<br>";
echo "publicacao = $publicacao<br>";
echo "Docente id = $docente<br>";
echo "tipo pub = $tipo_publicacao<br>";*/

// se o projeto de pesquisa for igual a 1 quer dizer que nenhum projeto foi selecionado.
if ($projetoPesquisa == 1) {

	$insereBanco = $sql->query("INSERT INTO publicacao SET titulo = '$titulo_publicacao', tipo = '$tipo_publicacao', grupopesquisa_docentes_id = '$docente', referencia = '$referencia', projetopesquisa_id = '$projetoPesquisa', linhapesquisa_id = NULL, publicacao = '$publicacao', grupopesquisa_docentes_docentes_id = 1");

	$buscaBanco = $sql->query("SELECT id FROM publicacao WHERE linhapesquisa_id = NULL ");
	$linha = $buscaBanco->fetch();
	print_r($linha);

	header("Location: selecionar_linha.php");

}else{
	//PEGAR O ID DO PROJETO

	// FAZER UM SELECT EM projetopesquisa E PEGAR O ID DO GRUPO
	$buscaBancoProjeto = $sql->query("SELECT grupopesquisa_id FROM projetopesquisa WHERE id = '$projetoPesquisa' ");

	//GUARDAR O ID DO GRUPO EM UMA VARIAVEL
	foreach ($buscaBancoProjeto as $dadosProjeto) { 
		$id_grupo = $dadosProjeto['grupopesquisa_id'];

	echo "ID DO GRUPO relacionado ao projeto de pesquisa: $id_grupo <br>";
}
	//PEGAR ESSA VARIAVEL E FAZER UM SELECT EM grupopesquisa_docentes E PEGAR A grupopesquisa_linhapesquisa_id 
	$buscaLinhaPesquisa = $sql->query("SELECT grupopesquisa_linhapesquisa_id FROM grupopesquisa_docentes WHERE grupopesquisa_id = '$id_grupo' ");

	foreach ($buscaLinhaPesquisa as $dadosLinhaDoProjeto) { 
		$linhaDoProjeto = $dadosLinhaDoProjeto['grupopesquisa_linhapesquisa_id'];

echo "linha de pesquisa vinda do projeto: $linhaDoProjeto <br>";
	//echo "ID DO GRUPO relacionado ao projeto de pesquisa: $id_grupo";
}

	$insereBanco = $sql->query("INSERT INTO publicacao SET titulo = '$titulo_publicacao', tipo = '$tipo_publicacao', grupopesquisa_docentes_id = '$docente', referencia = '$referencia', projetopesquisa_id = '$projetoPesquisa', linhapesquisa_id = '$linhaDoProjeto' , publicacao = '$publicacao', grupopesquisa_docentes_docentes_id = 1");

	

}





?>