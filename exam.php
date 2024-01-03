<html>
<head>
<title>Grocery System </title>
</head>
<body><center>
<h1><b>GROCERY MANAGEMENT SYSTEM</b></h1>
    <h2><form action="grocery.php" method="post" onsubmit="submitt">
    <label for="Pid"> Product ID: </label><br><br>
    <input type="number" id="Pid" value="pid" required><br><br>
    <label for="mname">Product Name:</label><br><br> 
    <input type="text" id="productname" value="" required><br><br>
    <label for="Brand"> Brand: </label><br><br>
    <input type="text" id="brand" value="" required><br><br>
    <label for="category">Category:</label><br><br> 
    <input type="text" id="category" value="" required><br><br>
    <label for="price">Price:</label><br><br>
    <input type="number" id="price" value="price" required><br><br>
    <input type="submit" id="submit"><br><br>
    </center></h2>
<script>
   function formvalidation()
    {
      var id=document.form.pid.value();
      var mname=document.form.mname.value();
      var brand=document.form.brand.value();
      var category=document.form.category.value();
      var price=document.form.price.value();
      if(id=="")
      { 

       }
    }
 </script>
<?php
$conn= mysqli_connect("localhost","root","","exam");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{

  $product_id = $_POST['product_id'];
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  echo " The values are: ".'<br>';
  echo "Product_ID: ".$product_id.'<br>';
  echo "Name: ".$name.'<br>';
  echo "Brand: ".$brand.'<br>';
  echo "Category: ".$category.'<br>';
  echo "Price: ".$price;
}

$sql="insert into grocery values('$product_id', '$name', $brand, $category, $price)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>
       