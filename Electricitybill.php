<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        form {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <h2>Electricity Bill Calculator</h2>
    <label for="consumption">Electricity Consumption (in kWh):</label>
    <input type="number" id="consumption" name="consumption" required>

    <button type="submit">Calculate Bill</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $consumption = test_input($_POST["consumption"]);

    // Given tariff rates (you can customize these as needed)
    $baseCharge = 20; // Base charge in dollars
    $ratePerUnit = 0.15; // Rate per unit in dollars

    // Calculate the electricity bill
    $bill = $baseCharge + ($consumption * $ratePerUnit);

    // Display the result
    echo "<h3>Electricity Bill</h3>";
    echo "Consumption: $consumption kWh <br>";
    echo "Base Charge: $$baseCharge <br>";
    echo "Charge per Unit: $$ratePerUnit <br>";
    echo "Total Bill: $$bill";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</body>
</html>