<?php
  try {
    $hostname = "138.186.228.17";
    $port = 1433;
    $dbname = "bemslcom_bemsl";
    $username = "bemslcom_bemsl";
    $pw = "BleJz1b351";
    $dbh = new PDO ("dblib:host=$hostname:$port;dbname=$dbname","$username","$pw");
    echo "Conexão ok";
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
?>
