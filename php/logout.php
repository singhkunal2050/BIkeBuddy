<?php

session_start();
$_SESSION = array();
session_destroy();
echo "<script >
		alert('Looggedf OUT');
		location='/bb2020/index.html';
        </script> ";
        

?>
