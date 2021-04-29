<?php

$mysql = mysqli_connect('globaljustice2.mysql.dbaas.com.br', 'globaljustice2', 'ePRJJYxhGpsm5g');

/* Test the MySQL connection */
if (mysqli_connect_errno()) {
printf("Connection failed: %s\n", mysqli_connect_error());
exit();
}

/* Print the MySQL server version */
printf("MySQL server version: %s\n", mysqli_get_server_info($mysql));

/* Close the MySQL connection */
mysqli_close($mysql);
?>
