<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$pdo->exec("insert into 4eah_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."')");

header("Location:http://localhost/4eah_keijiban/index.php");

?>