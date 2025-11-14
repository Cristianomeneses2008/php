<?php
// $_SESSION
session_start();
$_SESSION['autenticado'] = true;

if($_SESSION['autenticado']){
    echo "<p>Logado com sucesso!</p>";
}else{
    echo "<p>Não Logado com sucesso!</p>";
    session_destroy();
}

?>


