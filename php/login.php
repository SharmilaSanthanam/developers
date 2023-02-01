<?php
   session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect("sql12.freesqldatabase.com", "sql12593960", "67xMjgJv3s", "sql12593960");

$query = mysqli_query($con, "SELECT `id` FROM `users` WHERE `email`='$email' AND `password`='$password'");
$fetch = mysqli_fetch_assoc($query);
$id = isset($fetch['id']);

$num = mysqli_num_rows($query);

if(!$email & !$password)
{
    echo "All fields required!";
}
else
if(!$email)
{
    echo "Email Required";
}
else
if(!$password)
{
    echo "Password Required";
}
else
if($num == 0)
{
    echo "Incorrect credentials";
}
else
if($email & $password)
{
    $_SESSION['id'] = $id;
    echo " Id : ";
    echo $_SESSION['id'] ;
    

    $_SESSION['email'] = $email;
    echo " Email : "; 
    echo $_SESSION['email'];

    echo "<script>window.location.href='https://profilewithphp.netlify.app/profile.html';</script>";
}

else
{

    echo "<script>window.location.href='https://profilewithphp.netlify.app/login.html';</script>";

}

?>
