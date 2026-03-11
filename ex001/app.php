<?php 

require ("pessoaFisica.php");

$usuario = new PessoaFisica ("Joao Pedro", "joao@gmail.com", "11 99633-1818", 24);
$usuario2 = new PessoaJuridica("sadasd", "aaa", "1123123123", 30, "4456465465");

echo "<pre>";
var_dump($usuario) . "<br>";

?>