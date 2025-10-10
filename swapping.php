<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Task 5. Swapping Variables</h2>
    <?php
    $a = 5;
    $b = 10;

    echo "Before Swap: A = $a, B = $b <br>";


    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "After Swap: A = $a, B = $b";
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