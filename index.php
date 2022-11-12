<?php
echo 'Olá mundo<br>';
echo 'Claudine Roberto<br>';

print ('<h1>Escrevendo</h1>');

print_r ('<h2>Escevendo de novo</h2>');

$nome = 'Claudine';
$idade = 24;
$altura = 1.72;
$fumante = true;


echo '<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura . '<br>';
echo $fumante . '<br>';

echo 'Olá ' . $nome . ' você tem ' . $idade . ' anos' . "  e tem " . $altura . " de altura. ";


echo "<hr>";
echo gettype($nome).'<br>';
echo gettype($idade).'<br>';
echo gettype($altura).'<br>';
echo gettype($fumante).'<br>';









?>