<?php
$link = mysqli_connect("localhost", "root", "", "question");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "UPDATE  question  
set comment=(?)
";
 
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "s",  $comm);
    
    $comm = $_REQUEST['com'];
    if(mysqli_stmt_execute($stmt)){
        echo "Records Updated successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>