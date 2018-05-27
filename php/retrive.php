<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db="Question";
$conn=new mysql($servername,$username,$password,$db);
$sql="select question answer cooment from Question;"
if($conn->query($sql)==TRUE){

}
else{
    echo"Error: ".$sql."<br>".$conn->error;
}
?>