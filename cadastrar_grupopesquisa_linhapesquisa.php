
<?php
require 'php/conect.php';

$grupopesqui = $_POST['c5'];
$linhapesquisa = $_POST['c4'];
$docente = $_POST['c7'];


$pdo= $sql->query("INSERT INTO grupopesquisa_docentes SET grupopesquisa_id = '$grupopesqui',grupopesquisa_linhapesquisa_id = '$linhapesquisa' ");

header("Location: index_lider.php");


?>

