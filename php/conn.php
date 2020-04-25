<?php

    $host = "hansken.db.elephantsql.com";			// (hansken-01)
    $user = "euydmwot";
    $pass = "Qg4IwhVzokKYXhoeM7KHESpDqPnlIJ5v";
    $db = "euydmwot";

    $id_count=rand(10,1000);

 // Open a PostgreSQL connection
    $conn = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");


?>