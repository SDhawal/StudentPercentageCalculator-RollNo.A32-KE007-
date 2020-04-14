<!DOCTYPE html>
<html>
<head>
<title>
Marks to Percentage Calculator
</title>
  <style>
  input[type=text] {
  width:100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border:3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  }
  input[type=text]:focus{border:3px solid #555}

  input[type=number] {
  width:100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border:3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  }
  input[type=number]:focus{border:3px solid #555}

  body
  {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(bg.jpg);
    background-size: cover;
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
.box h2
{
  margin: 0 0 30px;
  padding: 0;
  color: #929292;
  text-align: center;
}
.box .inputBox
{
  position: relative;

}

.box .inputBox label
{
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  letter-spacing: 2;
  pointer-events: none;
  transition: 0.5s;
  }
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label
  {
    top: -20px;
    left: 0;
    color: #298c43;
    font-size: 12px;
  }
  .box input[type="submit"]
  {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background:  #298c43;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
  }
  .optional{color: #fff;}

  </style>
</head>

<body>
<div class="box">
<h2>Student Detail</h2>
  <form action="StudentPercentageMain.php" method="post">
    <div class="InputBox">
  <label for="name">Student's Name</label>
  <input type="text" id="sname" name"sname" placeholder="Enter Name" required>

  <label for="regno"> Student's Registration Number</label>
  <input type="number" id="regno" name="regno" placeholder="Enter Registration Number" required>

  <label for="english"> Marks in Engish</label>
  <input type="number" id="engmarks" name="engmarks" placeholder="Enter Marks in English (Out Of 100)" required>

  <label for="physics"> Marks in Physics</label>
  <input type="number" id="pmarks" name="pmarks" placeholder="Enter Marks in Physics (Out Of 100)" required>

  <label for="Chemistry"> Marks in Chemistry</label>
  <input type="number" id="cmarks" name="cmarks" placeholder="Enter Marks in Chemistry (Out Of 100)" required>

  <label for="maths"> Marks in Mathematics</label>
  <input type="number" id="mmarks" name="mmarks" placeholder="Enter Marks in Maths (Out Of 100)" required>

  <label for="optional" class="optional"> Marks in Optional</label>
  <input type="number" id="omarks" name="omarks" placeholder="Enter Marks in PE/CSE (Out Of 100)" required>

  <input type="submit" name="" value="submit">
</div>
</form>
</div>
</body>
</hmtl>
