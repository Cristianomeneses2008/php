<p>Isso será ignorado pelo PHP e exibido pelo navegador.</p>

<?php
//Array

echo 'Enquanto isto vai ser interpretado.';

$frutas = [1, "Maçã", "Manga", "Laranja", "Abacaxi"];

//echo $frutas;

var_dump($frutas);

echo "<pre>";
print_r($frutas);
die(__FILE__."<br>".__DIR__);
?>

<p>Isso também será ignorado pelo PHP e exibido no navegador.</p>


