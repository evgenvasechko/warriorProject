<?php

include ('connection.php');

//$monuments = $connection->query();
//
//$lamps = $connection->query();
//
//$bronze = $connection->query();

$gravestones = $connection->query('SELECT * FROM gravestones');