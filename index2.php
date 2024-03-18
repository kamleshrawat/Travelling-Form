<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(228,195,195);
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <!-- This is a container -->
        <p>Your party status is here:</p>
        <?php
        $age=71;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else{
            echo "You can not go to the party";
        }

        echo "<br>";
        $languages=array("Python","C++","php","NodeJs");
        echo $languages[0];
        echo count($languages);

        echo "<br>";
        $a=0;
        while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        $a=0;
        while ($a < count($languages)) {
            echo "<br>The value of languages is: ";
            echo $languages[$a];
            $a++;
        }

        echo "<br>";
        $a=0;
        do{
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }while ($a < 10);

        echo "<br>";
        for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of a is: ";
            echo $a;
        }

        echo "<br>";
        foreach ($languages as $value) {
            echo "<br>The value is ";
            echo $value;
        }

        echo "<br>";
        echo "<br>";
        function print5(){
            echo "FIVE";
        }
        print5();

        echo "<br>";
        function print_number($number){
            echo "Your number is ";
            echo $number;
        }
        print_number(45);
        ?>
    </div>
</body>
</html>