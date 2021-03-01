<?php 
$host = 'localhost';
$user = 'root';
$pass ='askar1803';
$name ='connectionphp';


$conn=mysqli_connect($host,$user,$pass,$name);
if ( mysqli_connect_error()){

    echo ' the error of connection is ' .mysqli_connect_error;

}
else  { 
    echo 'connection is successful';
}


?>