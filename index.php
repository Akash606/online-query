<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <div class="nav">
<ul>
<li><a href="index.php"><i class="fa fa-home"> Home</i></a></li>
<li><a href="practical.html"><i class="fa fa-info-circle"> About</i></a></li>
<li><a href="practical2.html"><i class="fa fa-book"> Contact</i></a></li>
</ul>
</div>
</div>
<div class=" ave col-sm-3 sidenav nav-stacked">
<form class="filed" action="php/index.php" method="POST">
   <lable> Question</lable><br>
    <input type="text" placeholder="Enter Question" name="question" id="question" class="form-control"><br>
   <lable> Answer </lable><br>
    <input type="text" placeholder="Enter Answer" name="answer" id="Answer"class="form-control"><br>
    <input type="FILE" name="image"><br><br>
    <input type="submit" onsubmit="php/inder.php" class="btn btn-success">
</form>
</div>


<div class="navbar navbar-default">
<div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
    <?php
     
    $link = mysqli_connect("localhost", "root", "", "question");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql="select Question, Answer from question";
    $_result=mysqli_query($link,$sql) or die ("Bad Query:$sql");
    while($row=mysqli_fetch_assoc($_result)){
      
        echo "<div class='cont'>";
        echo "<h2><span class='label label-success'>{$row['Question']}
        </span></h2><br> </h2>";
        echo "<p>{$row['Answer']}</p><br>";
echo "</div>";
}

?>
</div>

<footer class="container-fluid">
Copyright &copy; JQuery.com<br><br><i class="foo fa fa-google-plus-square" style="font-size:25px"></i> <i class="fa fa-facebook-square"style="font-size:25px"></i> 
<i class="fa fa-instagram"style="font-size:25px"></i></footer>


</body>
</html>