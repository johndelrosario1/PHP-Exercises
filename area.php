<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Task 3. Area and Perimeter of a Rectangle</h2>
    <?php
    $length = 8; 
    $width = 5;  

   
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);


    echo "Length: $length <br>";
    echo "Width: $width <br>";
    echo "Area of Rectangle: $area <br>";
    echo "Perimeter of Rectangle: $perimeter <br>";
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