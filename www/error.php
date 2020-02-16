<?php
switch($_GET['code'])
{
case '404':header('Location: https://www.harris-joshua.com/error-404.php');
break;
default:header('Location: https://www.harris-joshua.com/');
}
?>