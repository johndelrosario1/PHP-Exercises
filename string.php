<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Tastk 8. String Manipulation</h2>
<body>
    <?php
    $sentence = "Ang hirap ng capstone!";

    echo "Original Sentence: $sentence <br>";
    echo "Number of Characters: " . strlen($sentence) . "<br>";
    echo "Number of Words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence) . "<br>";
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