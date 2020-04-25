<?php

    $host = "hansken.db.elephantsql.com";			// (hansken-01)
    $user = "euydmwot";
    $pass = "Qg4IwhVzokKYXhoeM7KHESpDqPnlIJ5v";
    $db = "euydmwot";

 // Open a PostgreSQL connection
    $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");




    $query = 'SELECT * FROM users';
    $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

      echo "<pre>ID	|	NAME	|	PASSWORD  </pre>";
  	  echo"==================================";

	while($row = pg_fetch_row($results)) {
      echo "<pre>";
      echo  $row[0] . "	|	" . $row[1] ."	|	" . $row[2] ;
      echo "</pre>";
  	  echo"<br>";
   }

    pg_close($con);

?>