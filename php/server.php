<?php

	session_start();

	//init variables

	$username="";
	$password="";

	$errors=array();

	// onnect to db

	$db=mysqLi_connect('localhost','root','','test') or die("Could not  connect!!");

	//Register users


	$username = mysqLi_real_escape_string($db,$POST['username']);
	$mail = mysqLi_real_escape_string($db,$POST['mail']);
	$password = mysqLi_real_escape_string($db,$POST['password']);
	$password2 = mysqLi_real_escape_string($db,$POST['password2']);

	if(empty($username))	
		array_push($errors, "username is required");
	if(empty($mail))	
		array_push($errors, "mail is required");
	if(empty($password) ||  empty($password2) )	
		array_push($errors, "password is required");
	if($password!=$password2)	
		array_push($errors, "password mismatch!");


	/// check db for existing username

	$user_check_query="SELECT * FROM user WHERE uname='$username' or email='$email' LIMIT 1";

	$results=mysqLi_query($db,$user_check_query);
	$user=mysqli_fetch_assoc($results);

	if($user){
		if($user['uname']===$username)	
			array_push($errors, "Username taken");
		if($user['email']===$email)	
			array_push($errors, "Email exists");

	}

	/// count the no of users

	$query="SELECT count(*) from user";
	$usercount=mysqLi_query($db,$query);			// usercount for userid 

	/// register user if no error

	if(count($errors)==0){
		$password=md5($password);			// hashing for password
		$query="INSERT INTO user  values('$usercount',$username','$email','$password')";
		mysqLi_query($db,$query);

		$_SESSION['username']=$username;
		$_SESSION['success']="You are Logged in!!";

		header('location:/index.php');
	}


?>