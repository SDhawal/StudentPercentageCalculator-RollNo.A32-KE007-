<!DOCTYPE html>
<html>
<head>
  <title>
    Marks Percentage
  </title>
    <style>
    body
    {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: url(bgf.jpg);
      background-size: auto;
    }
    .box
    {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 400px;
      padding: 40px;
      background: rgba(0, 0, 0, 0);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.8);
      border-radius: 10px;
  }
    </style>
</head>
<body>
  <div class="box">
  <?php
  session_start();

  $StuName = $_SESSION['sname'];
  $Regid = $_POST["regno"];
  $sub1 = $_POST["engmarks"];
  $sub2 = $_POST["pmarks"];
  $sub3 = $_POST["cmarks"];
  $sub4 = $_POST["mmarks"];
  $sub5 = $_POST["omarks"];
  $sum = $sub1+$sub2+$sub3+$sub4+$sub5;
  $avg = $sum/500;
  $percent =$avg*100;
  echo "<font size=4><center><b>Hello  Your Result is :-</b></center><br>";
  echo "<font size=4><center>Total marks:-".$sum."</center><br>";
  echo "<font size=4><center>Percentage in English:-".$sub1." %</center><br>";
  echo "<font size=4><center>Percentage in Physics:-".$sub2." %</center><br>";
  echo "<font size=4><center>Percentage in Chemistry:-".$sub3." %</center><br>";
  echo "<font size=4><center>Percentage in Mathematics:-".$sub4." %</center><br>";
  echo "<font size=4><center>Percentage in Optionals:-".$sub5." %</center><br>";
  echo "<font size=4><center>Total Percentage is:-".$percent." %</center>";

  $conn = mysqli_connect('localhost','root');
  mysqli_select_db($conn,'StudentPercentage');
  if(!$conn)
  {
  echo "font size=5><center>Connection Unsuccessfull</center>";
  }
  else {
    $sql= "insert into StudentData values
    ('StuName','$Regid','$sub1','$sub2','$sub3','$sub4','$sub5')";
    if (mysqli_query($conn,$sql)) {
      echo "new record added Succesfully";
    }
    else{
     echo "Error Occured:".$sql."<br>".mysqli_error($conn);
   }
  }
?>
</div>
</body>
</html>
