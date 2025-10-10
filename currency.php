<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Task 11. Currency Converter </h2>
<body>
    <?php
    $amount_php = 1000;


    $rate_usd = 0.018;
    $rate_eur = 0.017;
    $rate_jpy = 2.65; 

    $usd = $amount_php * $rate_usd;
    $eur = $amount_php * $rate_eur;
    $jpy = $amount_php * $rate_jpy;

    echo "Amount in PHP: ₱$amount_php <br>";
    echo "In USD: $" . round($usd, 2) . "<br>";
    echo "In EUR: €" . round($eur, 2) . "<br>";
    echo "In JPY: ¥" . round($jpy, 2);
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