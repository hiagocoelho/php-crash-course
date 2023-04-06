<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        // Here we have five types of variables:
        $name = 'Hiago'; // string
        $age = 23; // integer
        $isMale = true; // boolean
        $height = 1.79; // double
        $salary = null; // NULL

        echo $name . "<br />";
        echo $age . "<br />";
        echo $isMale . "<br />";
        echo $height . "<br />";
        echo $salary . "<br />";
        echo "<br />";
        
        // Checking the types of the variables
        echo gettype($name) . "<br />";
        echo gettype($age) . "<br />";
        echo gettype($isMale) . "<br />";
        echo gettype($height) . "<br />";
        echo gettype($salary) . "<br />";
        echo "<br />";

        // Getting the whole variable information (its type, length, and value)
        echo var_dump($name) . "<br />";
        echo var_dump($age) . "<br />";
        echo var_dump($isMale) . "<br />";
        echo var_dump($height) . "<br />";
        echo var_dump($salary) . "<br />";
        echo "<br />";

        // Changing the values of the variables
        $name = 'Ana';
        $age = 30;
        $isMale = false;
        $height = 1.64;
        $salary = null;

        echo $name . "<br />";
        echo $age . "<br />";
        echo $isMale . "<br />";
        echo $height . "<br />";
        echo $salary . "<br />";
        echo "<br />";

        // Working with validations of types of the variables
        echo var_dump(is_string($name)) . "<br />";
        echo var_dump(is_integer($age)) . "<br />";
        echo var_dump(is_bool($isMale)) . "<br />";
        echo var_dump(is_double($height)) . "<br />";
        echo var_dump(is_null($salary)) . "<br />";
        echo "<br />";

        // Checking if a variable is defined (if it is not null)
        echo var_dump(isset($age)) . "<br />";
        echo var_dump(isset($salary)) . "<br />";
        echo var_dump(isset($job)) . "<br />";
        echo "<br />";

        // Declaring constants, which are immutable values
        define('PI', 3.14);
        echo PI . "<br />"; // To work with constants, we don't need to type the $ symbol
        
        // Checking if a constants is defined or not, just like the isset() method
        echo var_dump(defined('PI')) . "<br />";
        echo var_dump(defined('PI2')) . "<br />";
        echo "<br />";

        // Using PHP built-in constants
        echo PHP_INT_MAX . "<br />";
        echo "<br />";
    ?>
</body>
</html>