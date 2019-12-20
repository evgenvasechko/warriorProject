<?php

include ('connection.php');

$img = $connection->query('SELECT img_name FROM gallery');