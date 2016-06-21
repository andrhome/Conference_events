<?php

$to="tehnolog_new@mail.ru";/*Your Email*/

$subject="Message from the website";

$date=date("l, F jS, Y");
$time=date("h:i A");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$telephone=$_REQUEST['telephone'];


$msg  = "";
$msg .= "Message sent from website on date:  $date, hour: $time.\n";
if(isset($name)){
    $msg .= "Name: $name\n";
}
if(isset($email)){
    $msg .= "Email: $email\n";
}
if(isset($telephone)){
    $msg .= "Telephone: $telephone\n";
}
if(isset($message)){
    $msg .= "Message: $message\n";
}


//$msg .= "Email: $email\n";
		

if($name == "") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>Warning!</strong> Please fill the Name field.
	</div>";

} else if($email=="") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>Warning!</strong> Please fill the Email field.
	</div>";

} else if($message == "") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>Warning!</strong> Please fill the Message field.
	</div>";

} else {
	mail($to,$subject,$msg,"From:".$email);
	echo "<div class='alert alert-success'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>Thank you!</strong>
	</div>";
}

?>