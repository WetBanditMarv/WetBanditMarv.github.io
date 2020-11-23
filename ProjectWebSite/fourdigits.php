<!DOCTYPE html>
<!--
Tanner Rodenburg
Assignment 6.2 #1

Write and test PHP scripts for the two exercises that follow, debug (if necessary).
When required to write a function, you must include a script to test the function with at
least two different data sets.  In all cases, for testing, you must write an HTML file
 that references the PHP file(s).

For this Exercise write a function and the code to test with the following requirements.
Write a function that takes a parameter of a string of numbers separated by spaces.
The function will return a value of the first four-digit number in the string and false if none.
9/20/2020
Bellevue University
!-->

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4 Digit Number Test</title>
  </head>
  <body>
<h1>Digit Tester</h1>


    <form action="fourdigits.php" method="post">
      Enter in each set of numbers you would like to test, followed by a space:
      <br>
      (example: 4 231 9432 9 4210)
      <br>
      <input type="text" style="width: 450px" name="numbers">
      <input type="submit">
    </form>

    <br>

    <?php

$testNumbers = $_POST["numbers"];

function output($testNumbers)
{
    $arrayNumbers = explode(" ", $testNumbers);
    foreach ($arrayNumbers as $outputNumber)
    {
        if (strlen($outputNumber) == 4)
        {
            return $outputNumber;
        }
        else
        {
            $outputNumber = 0;
        }
    }
}

echo "These are your test numbers: ";
echo $testNumbers;
echo "<br>";
echo "The first tested number with 4 digits is: ";

if (!empty($_POST["numbers"]))
{
    if (output($testNumbers) == 0)
    {
        echo "false";
    }
    else
    {
        echo output($testNumbers);
    }
}

?>
<br>
    Re-enter new numbers at anytime and click submit to test again.
    <br>
    <br>
    <a href="index.html">Back to Home Page</a>

  </body>
</html>
