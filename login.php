<?php
session_start();
include('connection.php');
if(isset($_POST['username'])&& isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes(($data));
        $data=htmlspecialchars($data);
        return $data;
    }
 $username=validate($_POST['username']);
 $password=validate($_POST['password']);
 if(empty($username)||empty($password)){
    header("Location: index.php?error=both fields required");
    exit();
 }
else{
    $sql="select *from persons where user_name='$username' AND pass_word='$password'";
    $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['user_name']===$username &&  $row['pass_word']===$password){
        $_SESSION['user_name']=$row['user_name'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        echo "hello";
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorect username and password");
        exit();
    }
 }
}
}
else{
    header("Location: index.php");
    exit();
}
?>