<?php
//This script will handle login
$uname=$_POST['uname'];
$passw=$_POST['passw'];

session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
	$flag = 1;							        //ksr added a flag for login
	echo "<script >
	alert('You are already logged in!');
	location='/bb2020/book.html';
	</script> ";

	//header("location: /bb2020/book.html");
	exit;
}

require "conn.php";

$username = $password = "";
$err = "";
$id="";


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['uname'])) || empty(trim($_POST['passw'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['uname']);
        $password = trim($_POST['passw']);
    }

    if(empty($err))
	{
	    $sql = "SELECT id, username, password FROM users WHERE username ='$username'";
	    $results = pg_query($conn, $sql);
	    
	    	    // Try to execute this statement
	    if($results){
			
			$rows = pg_num_rows($results);
			
			if($rows == 1)
	  		{
				$data = pg_fetch_row($results);
				
				//echo  $data[2] .  $password;
				if($data[2]==$password)			//hashing can be implemented after testing
				{

					// this means the password is corrct. Allow user to login
					$_SESSION["username"] = $username;
					$_SESSION["id"] = $id;
					$_SESSION["loggedin"] = true;

					
					echo"You are looged in";			// wait for couple of seconds
					
					echo "<script >
						alert('Logged in and Session started');
						location='/bb2020/book.html';
					</script> ";
		
					//Redirect user to book page
					//header("location: /bb2020/book.html");
					
				}
				else
				{
					echo"Couldnt log in";			// wait for couple of seconds
						
					echo "<script >
						alert('Wrong password or username');
						location='/bb2020/index.html';
					</script> ";
				}
	        }
				
	    }
	}    


}

$query = "select * from users";

echo"".$uname."".$passw;

						
echo "<script >
	alert('Coudnt log in');
	location='/bb2020/index.html';
</script> ";


// destroying session for testig 
// will remove after testing

//session_destroy();



?>