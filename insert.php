<?php

$conn = mysqli_connect('localhost', 'root','', 'mcitdb');

$stname= $_POST['stname'];
$faname= $_POST['faname'];
$moname= $_POST['moname'];
$doa= $_POST['doa'];
$adn= $_POST['adn'];
$dob= $_POST['dob'];
$session= $_POST['session'];
$class= $_POST['class'];
$roll= $_POST['roll'];
$stream= $_POST['stream'];
$pwd= $_POST['pwd'];
$phone= $_POST['phone'];
$aphone= $_POST['aphone'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$padd= $_POST['padd'];
$dis= $_POST['dis'];
$pin= $_POST['pin'];
$state= $_POST['state'];
$cadd= $_POST['cadd'];
$rel= $_POST['rel'];
$category= $_POST['category'];

$sql= "INSERT INTO form (stname, faname, moname, doa, adn, dob, session, class, roll, stream, pwd, phone, aphone, gender, email, padd, dis, pin, state, cadd, rel, category) VALUES ('$stname', '$faname', '$moname', '$doa', '$adn', '$dob', '$session', '$class', '$roll', '$stream', '$pwd', '$phone', '$aphone', '$gender', '$email', '$padd', '$dis', '$pin', '$state', '$cadd', '$rel', '$category')";

$result = mysqli_query($conn,$sql);

if ($result)
	echo "<center><i><h1>Successfully Inserted</center></i></h1>";
else
	echo "<center><i><h1>Something went wrong</center></i></h1>";
$conn->close();

?>