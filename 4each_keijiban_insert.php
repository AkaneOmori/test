<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=test_db_1st;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)values
('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
 
    
header("Location:http://localhost/4each_keijiban_omori/4each_keijiban_index.php");

?>