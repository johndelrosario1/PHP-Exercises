<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Task 10. Simple Grading System</h2>
<body>
    <?php
    $cc9 = 85;
    $cit5 = 92;
    $cc22 = 78;

    $average = ($cc9 + $cit5 + $cc22) / 3;

    echo "CC9: $cc9 <br>";
    echo "CIT5: $cit5 <br>";
    echo "CC22: $cc22 <br>";
    echo "Average: " . round($average, 2) . "<br>";

    if ($average >= 90) {
        echo "Passed";
    } elseif ($average >= 75) {
        echo "Passed";
    } elseif ($average <= 74) {
        echo "Fail";
    } elseif ($average >= 60) {
        echo "Fail";
    } else {
        echo "Fail";
    }
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