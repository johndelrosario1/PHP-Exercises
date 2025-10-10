<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Task 6. Salary Calculator</h2>
<body>
    <?php
    $basic_salary = 15000;
    $allowance = 5000;
    $deduction = 2000;

    $net_salary = $basic_salary + $allowance - $deduction;

    echo "Basic Salary: ₱$basic_salary <br>";
    echo "Allowance: ₱$allowance <br>";
    echo "Deduction: ₱$deduction <br>";
    echo "----------------------------<br>";
    echo "Net Salary: ₱$net_salary";
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