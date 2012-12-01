<?php

mysql_connect("localhost","root","") or //local host é o nosso servidor no caso agora 
die(mysql_error());


mysql_select_db("teste_php")  or die(mysql_error());

$sql = "INSERT INTO contacts (name,email,message,created)VALUES ('Oseias Dalponte','oseiasdalponte','essa é uma mensagem legal!',NOW())";

mysql_query($sql) or  die(mysql_error());


echo "funcionou?";
mysql_close();
