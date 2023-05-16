<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
        #now we are going to work with variables
        $myName = "Nahuel";
        #variables in PHP does not require to specify the type, quite different from
        #java or C++ which i'm used to. Also variables MUST START WITH ${variableName}.
        
        #now in java variable on a string woud be typed like 
        #String name = "Nahuel"
        #Integer years = 22;
        #String mySuperVariable = "My name is " + name + " and i'm " + years;
        #In PHP we do:
        $age = 22;
        $superVariable = "My name is $myName and i'm $age";
        
        echo("<p> $superVariable </p>"); 
    
    
    ?>
</body>
</html>