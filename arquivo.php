<?php
foreach ($_FILES["userfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["userfile"]["tmp_name"][$key];
        // basename() pode prevenir ataques de percorrer o sistema de arquivos,
        // mas mais validações são necessárias
        $name = basename($_FILES["userfile"]["name"][$key]);
        move_uploaded_file($tmp_name, "C:\\wamp64\\www\\aula\\$name");
    }
}
//var_dump($_FILES);

//foreach ($_FILES["pictures"]["error"] as $key => $error) {
//    if ($error == UPLOAD_ERR_OK) {
//        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
//        // basename() pode prevenir ataques de percorrer o sistema de arquivos,
//        // mas mais validações são necessárias
//        $name = basename($_FILES["pictures"]["name"][$key]);
//        move_uploaded_file($tmp_name, "C:\\wamp64\\www\\aula\\$name");
//    }
//}

?>
