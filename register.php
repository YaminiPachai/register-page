<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "register";
$con = new mysqli($host, $user, $pass, $db);
if (!$con){
    echo " There is a prblem with conection";
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pasword'];
$confirm = $_POST['confirm'];
$qry = "INSERT INTO  register ('name', 'email', 'password', 'confirm') values ('$name','$email','$password','$confirm' )"
$insert =mysqli_query($con,$qry);
if (!$insert){
    echo "problem with inserting data" ;

}
else{
    echo "Data Inserted";
}

?>