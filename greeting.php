<?php

#function definition
function greet($name, $age)
{
    echo "How are you, $name and your age is: $age?";
}

#get input from the user
echo "Enter your Name: ";
$nameEntered=fgets(STDIN);

echo "Enter your Age: ";
$ageEntered=fgets(STDIN);

#function call
greet($nameEntered, $ageEntered)
?>