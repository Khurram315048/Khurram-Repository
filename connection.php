<?php
$servername="localhost";
$username="root";
$password="";
$db_name="database2";
$conn=new mysqli($servername,$username,$password,$db_name);
if(!$conn){
   echo "connection failed";
}
else{
    echo "successfull";
}

?>