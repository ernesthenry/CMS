<?php

require_once('db_credentials.php');

function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    return $connection;
}

// close the connection
function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}
