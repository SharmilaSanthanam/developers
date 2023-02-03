<?php
if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 6) {
    die("Password must be at least 6 characters");
}

$connection=mysqli_connect("localhost", "id20235004_sql12593960", "1vxc_@^[4p>jcs>N", "id20235004_profile");
// $connection=mysqli_connect('localhost','root','','login');

if($connection)
{
  
   $name=$_POST["name"];
   $email=$_POST['email'];
   $password=$_POST['password'];

    $insertUser="INSERT into users (name, email, password) values ('$name','$email','$password')";
    $results=mysqli_query($connection,$insertUser);
    
    if($results)
    {
        echo "Registered successfully";
        echo "<script>window.location.href='https://profilewithphp.netlify.app/login.html';</script>";
       
    }
    else{
        echo "Registration failed";
         echo "<script>window.location.href='https://profilewithphp.netlify.app/registration.html';</script>";
    }
}
?>
