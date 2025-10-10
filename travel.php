<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Task 12. Travel Cost Estimator</h2>
<body>
    <?php
    $distance = 150;    
    $fuel_consumption = 12; 
    $fuel_price = 70;  


    $fuel_needed = $distance / $fuel_consumption;


    $travel_cost = $fuel_needed * $fuel_price;

    echo "Distance: $distance km <br>";
    echo "Fuel Consumption: $fuel_consumption km/l <br>";
    echo "Fuel Price: ₱$fuel_price per liter <br>";
    echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
?>
 <style>
  body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-color: #AA98A9;
    text-align: center;
    padding: 50px;
  }
</style>
</body>
</html>