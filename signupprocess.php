<?php

$name = $_POST["n"];
$email = $_POST["e"];
$password = $_POST["p"];
$gender = $_POST["g"];
$country = $_POST["c"];


if(empty($name)){
  echo "Please Enter your Name";

}else if(empty($email)){
    echo "Please Enter your email Address";

}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email Address";

}else if(empty($password)){    
    echo "Please Enter your Password";

}else if(strlen($password)<8){ 
    echo "Password must contains at least 8 characters";

}else if(!preg_match("#[0-9]#",$password)){
    echo "Password must contains only  numbers";

}else{

$dbms = new mysqli("localhost", "root", "Madushi927@", "webmy", "3306");

$q = "INSERT INTO user(`name`,`email`,`password`,`gender_id`,`country_id`) VALUE ('".$name."','".$email."','".$password."','".$gender."','".$country."');";
$dbms->query($q);

echo"Success";

}
?>