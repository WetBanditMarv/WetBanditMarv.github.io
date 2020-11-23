<!DOCTYPE html>
<!--
Tanner Rodenburg
Assignment 6.2 #2
Write an HTML document that includes an anchor tag that calls a PHP document.
Also, write the called PHP script document, which returns a randomly chosen greeting from a list of five different greetings.
The greeting must be stored as constant strings in the script.  A random number between 0 and 4 can be computed with these lines:
# Set the seed for mtrand with the number of microseconds
#  since the last full second of the clock
mt_strand ( (double)microtime()  *  1000000);
$number = mtrand(0,  4) ; # Computes a random integer 0-4
9/20/2020
Bellevue University
!-->


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Greetings</title>
  </head>
  <body>

    <h1> Ways to say hi! </h1>

<?php
$greetingOne = "I am Buzz Lightyear. I come in peace.";
$greetingTwo = "Ahoy, matey!";
$greetingThree = "Howdy, partner!";
$greetingFour = "I'm Batman!";
$greetingFive = "Hello, my name is Inigo Montoya.";

for ($i = 0;$i <= 2;$i++)
{
    mt_srand((double)microtime() * 1000000);
    $number = mt_rand(0, 4); # Computes a random integer 0-4
    switch ($number)
    {
        case 0:
            echo $greetingOne;
        break;
        case 1:
            echo $greetingTwo;
        break;
        case 2:
            echo $greetingThree;
        break;
        case 3:
            echo $greetingFour;
        break;
        case 4:
            echo $greetingFive;
        break;
    }
    echo "<br><br>";

}

?>
<br>
That's all for now!
<br>
<a href="index.html">Back to Home Page</a>
  </body>
</html>
