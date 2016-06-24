<?php

$to="aquaterrashow@gmail.com";/*Your Email*/

$subject="Сообщение из веб-сайта aquaterrashow.com.ua";

$date=date("l, F jS, Y");
$time=date("h:i A");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$telephone=$_REQUEST['telephone'];
$company=$_REQUEST['company'];


$msg  = "";
$msg .= "Сообщение отправлено:  $date, hour: $time.\n";
if(isset($name)){
    $msg .= "Имя: $name\n";
}
if(isset($email)){
    $msg .= "Email: $email\n";
}
if(isset($telephone)){
    $msg .= "Телефон: $telephone\n";
}
if(isset($company)){
    $msg .= "Компания: $company\n";
}

//$msg .= "Email: $email\n";
		

if($name == "") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>ВНИМАНИЕ!</strong> Пожалуйста, заполните поле Имя.
	</div>";

} else if($email=="") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>ВНИМАНИЕ!</strong> Пожалуйста, заполните поле Email.
	</div>";

} else if($telephone == "") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>ВНИМАНИЕ!</strong> Пожалуйста, заполните поле Телефон.
	</div>";

} else if($company == "") {
	echo "<div class='alert alert-danger'>
		<a class='close' data-dismiss='alert'>×</a>
		<strong>ВНИМАНИЕ!</strong> Пожалуйста, заполните поле Компания.
	</div>";

} else {
	if(mail($to,$subject,$msg,"From:".$email)) {
	echo "1";
	}
}

?>