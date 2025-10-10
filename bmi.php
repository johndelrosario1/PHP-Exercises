<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Task 7. BMI Calculator</h2>
<body>
    <?php
    $weight = 65;
    $height = 1.70;

    $bmi = $weight / ($height * $height);

    echo "Weight: $weight kg <br>";
    echo "Height: $height m <br>";
    echo "BMI: " . round($bmi, 2);
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