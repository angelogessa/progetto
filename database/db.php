<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "password");
define("DATABASE", "mysmartopinion");



$db = mysql_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if ($db->connect_error) {
    die ("Error while trying to connect to database: " . $db->connect_error);
}



?>