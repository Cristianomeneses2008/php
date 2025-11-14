<?php
// cookies
setcookie('name', 'oi');
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
//setcookie('name', '');
?>


