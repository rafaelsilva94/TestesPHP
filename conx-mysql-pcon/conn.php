<?php
// definições de host, database, usuário e senha
$host = "elielmiranda.mysql.dbaas.com.br";
$db   = "elielmiranda";
$user = "elielmiranda";
$pass = "tibamgf1";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
print "Conexão Efetuada com sucesso!";
?>
