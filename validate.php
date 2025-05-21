<?php

$valid_username = 'harman';
$valid_password = '12345password';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($valid_username == $username && $valid_password == $password){
  echo "Welcome $username";
}
else{
  echo "Failed";
}


?>