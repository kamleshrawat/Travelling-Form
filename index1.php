<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <br>
        <?php
        define('PI',3.14);
            echo "Hello world and this is printed using php";
            // Lorem, ipsum dolor.

            echo "<br>";
            $variable1=5;
            $variable2=2 ;
            echo $variable1;
            echo $variable2;

            echo "<br>";
            Echo $variable1+$variable2;

            echo "<br>";
            echo "The value of variable1 + variable2 is ";
            echo $variable1+$variable2;

            echo "<br>";
            $newVar=$variable1;
            echo "The value of new variable is ";
            echo $newVar;

            // echo "<h1>Comparison Operators</h1>";
            echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);

            echo "<br>";
            echo $variable1++;
            echo $variable1;

            echo "<br>";
            $myVar=(true and false);
            echo var_dump($myVar);
        ?>

        <?php
            // echo "Hello world again";
            echo "<br>";
            $var="This is a string";
            echo var_dump($var);

            echo "<br>";
            $var=67;
            echo var_dump($var);

            echo "<br>";
            $var=67.1;
            echo var_dump($var);

            echo "<br>";
            $var=true;
            echo var_dump($var);

            echo "<br>";
            echo PI;
        ?>
    </div>
</body>
</html>