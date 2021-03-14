<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classwork</title>
</head>
<body>

<?php
    //Q1
    echo "Php is fun, but not without effort.<br>";
    echo "<br>";

    //Q2
    $myString = "I am not only fine but; super fine";
    if (strpos($myString, 'fine') !== false) {
    echo "My string contains fine<br>";
    }
    echo "<br>";

    //Q3
    echo strlen("What's next after PHP?");
    echo "<br>";
    echo "<br>";

    //Q4
    //$what = "What's next after PHP?"
    echo str_word_count("What's next after PHP?");
    echo "<br>";
    echo "<br>";
    
    //Q5
    $text = "Today is so boring";
    echo str_replace("boring","interesting","Today is so boring! <br>");
    echo "<br>";

    //Q6
    $a = 80;
    if ($a>=80){
        echo "Yes, feeling SUPER";
    }
    elseif ($a<80 && $a>=60){
        echo "It’s ok I guess";
    }
    else{
        echo "Man, I need to put in more effort";
    }
    
    echo "<br>";
    echo "<br>";

    //Q7
    for ($i=2; $i<=100; $i+=2){
    echo $i." ";
    } 
    echo "<br>"; 
    echo "<br>";

    //Q8
    $even =array("2", "4", "6", "8", "10");
    $odd = array("1", "3", "5", "7", "9");
    print_r(array_merge($even, $odd));

    echo "<br>";
    echo "<br>";
   
    //Q9
    $students = array(
        array(
            "name" => "Spag Giari",
            "address" => "Baneshwor",
            "age" => "20",
            "email" => "aprabesh65@gmail.com"
        ),

        array(
            "name" => "Srijan ",
            "address" => "Buddhanagar",
            "age" => "19",
            "email" => "srijan@gmail.com"
        ),

        array(
            "name" => "Prabesh",
            "address" => "Butwal",
            "age" => "16",
            "email" => "aprabesh65@gmail.com"
        ),

        array(
            "name" => "Bhan JA",
            "address" => "Waling",
            "age" => "23",
            "email" => "soul.dead00000@gmail.com"
        ),
        array(
            "name" => "Albert",
            "address" => "Baneshwor",
            "age" => "21",
            "email" => "albert@gmail.com"
        ),
        array(
            "name" => "Dan Cooper",
            "address" => "Baneshwor",
            "age" => "20",
            "email" => "cooper.dan@gmail.com"
        ),

        );
       
        foreach($students as $student){
            print_r($student);
            echo "<br>";
        }
    

?>
    
</body>
</html>