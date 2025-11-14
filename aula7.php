<?php
//Declaração de Variaveis

echo 'Hello ' . htmlspecialchars($_SERVER['SERVER_NAME']) . '!'. "<br>";
echo 'Hello ' . htmlspecialchars($_SERVER['SERVER_SOFTWARE']) . '!'. "<br>";

echo 'Hello ' . htmlspecialchars($_REQUEST["name"]) . '!'. "<br>";
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!'. "<br>";
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!'. "<br>";

?>