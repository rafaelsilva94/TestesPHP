<?php
$link = mysqli_connect("138.186.228.17", "bemslcom_bemsl", "BleJz1b351", "bemslcom_bemsl");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

/** GENERATED OUTPUT
Success: A proper connection to MySQL was made! The my_db database is great.
Host information: localhost via TCP/IP
*/

?>
