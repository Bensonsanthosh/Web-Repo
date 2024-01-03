<?php
// Connect to DB

$conn= mysqli_connect("localhost","root","","college");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{

  $name = $_POST['fname'];
  $rollno = $_POST['rollno'];
  $marksDS = $_POST['marksDS'];
  $marksASE = $_POST['marksASE'];
  $marksTot = $_POST['marksTot'];
  echo " The values are: ".'<br>';
  echo "Name: ".$name.'<br>';
  echo "Roll No: ".$rollno.'<br>';
  echo "DS Marks: ".$marksDS.'<br>';
  echo "ASE Marks: ".$marksASE.'<br>';
  echo "Total Marks: ".$marksTot;
}
//Connecting to database and inserting the values
$sql="insert into marks values('$name', '$rollno', $marksDS, $marksASE, $marksTot)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>