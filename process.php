<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honey";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messag = $_POST['messag'];

    $query = "INSERT INTO hony(full_name, email, phone, messag) VALUES ('$full_name', '$email', 
    '$phone', '$messag')";

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        echo "Form submitted successfuly";
    }else{
        echo "Form not submitted successfuly";
    }
}
?>