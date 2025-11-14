<?php
// $_FILES
?>
<!--<form action="arquivo.php" method="post" enctype="multipart/form-data">-->
<!--    <p>Imagens:-->
<!--        <input type="file" name="pictures[]" />-->
<!--        <input type="submit" value="Enviar" />-->
<!--    </p>-->
<!--</form>-->

<form enctype="multipart/form-data" action="arquivo.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Enviar esse arquivo: <input name="userfile[]" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>


