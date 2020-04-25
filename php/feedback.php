<?php

require_once "conn.php";

$email = $feedback = "";
$email_err = $feedback_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if feedback exists
    if(empty(trim($_POST["email"]))){
        $username_err = "email cant be Blank";
    }
    else{
        $sql = "SELECT * FROM feedback WHERE email = '$email'";
        $results = pg_query($conn, $sql);
	  
        if($results)
        {
             if(pg_num_rows($results) == 1)
                {
                    $username_err = "This username has submitted feedback"; 
                }
                else{
                    $email = trim($_POST['email']);
                }
        }
        else
        {
                echo "Something went wrong";
        }
    }
}


// Check if valid feedback 
if(empty(trim($_POST['feedback']))){
    $feedback_err = "feedback cannot be blank";
}
elseif(strlen(trim($_POST['feedback'])) < 20){
    $feedback_err = "Feedback cannot be less than 20 characters";
}
else{
    $feedback = trim($_POST['feedback']);
}


// If there were no errors, go ahead and insert into the database
if(empty($feedback_err) && empty($email_err))
{
    $sql = "INSERT INTO feedback VALUES ('$email', '$feedback');";
    $results = pg_query($conn, $sql);
    
    echo "results";
    echo $results;

    if ($results)
    {
    	echo "<script >
		alert('Feedback Submitted Successfully');
		location='/bb2020/index.html';
		</script> ";
    }
    else
        echo "Something went wrong... cannot redirect!";
}
else
    echo $email_err . $feedback_err ;

pg_close($conn);

?>



?>