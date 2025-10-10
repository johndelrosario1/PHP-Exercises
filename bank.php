<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2> Task 9. Bank Simulation</h2>
<body>
    <?php
    $balance = 1000;
    $deposit = 500; 
    $withdraw = 300;

    echo "Initial Balance: $balance <br>";


    $balance = $balance + $deposit;
    echo "After Deposit ($deposit): $balance <br>";

    $balance = $balance - $withdraw;
    echo "After Withdrawal ($withdraw): $balance <br>";

    echo "Final Balance: $balance";
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