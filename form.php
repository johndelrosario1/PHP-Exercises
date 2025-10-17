<?php


if (isset($_POST['name'], $_POST['age'])) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];

    $safe_name = htmlspecialchars($name);
    $safe_age = htmlspecialchars($age);
    
    echo "Hi, my name is $safe_name and I am $safe_age years old.";
    
} else {

    echo "Please submit the form completely.";
}

?>