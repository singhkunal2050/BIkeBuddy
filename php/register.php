<?php
require_once "conn.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["uname"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = '$username'";
        $results = pg_query($conn, $sql);
	  
        if($results)
        {
             if(pg_num_rows($results) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['uname']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
}


// Check for password
if(empty(trim($_POST['passw']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['passw'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['passw']);
}

// Check for confirm password field
if(trim($_POST['passw']) !=  trim($_POST['cpassw'])){
    $password_err = "Passwords should match";
}

// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users VALUES ($id_count , '$username' , '$password');";
    $results = pg_query($conn, $sql);
    
    echo "results";
    echo $results;

    if ($results)
    {
    	echo "<script >
		alert('Registered Successfully');
		location='/bb2020/index.html';
		</script> ";
    }
    else
        echo "Something went wrong... cannot redirect!";
}
else
    echo $username_err . $password_err . $confirm_password_err;

pg_close($conn);

?>

