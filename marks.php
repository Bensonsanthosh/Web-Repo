<DOCTYPE! html>
<html>
<head>
<style>
#regform{  
  border: 5px outset red;
  background-color: lightblue;
  text-align: center;
  width: 400;
  height: 400;
  margin:auto;

}
</style>
</head>
<body>
<div id="regform">
<h3> Registration Form</h3>
<br>
<form name="marksForm"  action="myConn.php" method="post">
<label for="name">Full Name:</label> 
<input type="text" id="name" name="fname" > <br><br>
<label for="roll">Roll No :</label> 
<input type="text" id="roll" name="rollno" > <br>

<h4>Marks Entry</h4>
<label for="ds">DS Marks :</label> 
<input type="text" id="ds" name="marksDS" ><br><br>
<label for="ase">ASE Marks:</label> 
<input type="text" id="ase" name="marksASE" ><br><br>
<label for="tot">Total Marks:</label> 
<input type="text" id="tot" name="marksTot" ><br><br>

<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>