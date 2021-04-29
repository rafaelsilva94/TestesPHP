<?php
$mysqli = new mysqli("187.45.196.209","js_tech3","retardado1878","js_tech3");
  echo "Conexão Efetuada com sucesso!";
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
