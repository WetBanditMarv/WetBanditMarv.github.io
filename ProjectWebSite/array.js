function Count(numberOfPrompts, testedNumbers) {
  var outputArray = [];
  var count = 0;
  var countZero = 0;
  var countNegative = 0;

  for (var i = 0; i < testedNumbers.length; ++i) {
    if (testedNumbers[i] > 0) {
      count++;
    } else if (testedNumbers[i] == 0) {
      countZero++;
    } else if (testedNumbers[i] < 0) {
      countNegative++;
    }
  }

  //combine counts into one array for output
  outputArray.push(count, countZero, countNegative);

  //seperates the user testedNumbesr by a "," for the tested number output
  testedNumbers = testedNumbers.join(', ');
  document.write("The numbers you chose for testing are: " + testedNumbers + "<br>");
  document.write("<br> Positive Values: " + outputArray[0] + "<br> Zero Values: " + outputArray[1] + "<br> Negative Values: " + outputArray[2]);
}

var numberOfPrompts = window.prompt("Enter how many numbers you'd like to test:");
var testedNumbers = [];

//loop prompt for the number of times defind by the user
for (var i = 0; i < numberOfPrompts; i++) {
  testedNumbers.push(prompt('Enter number ' + (i + 1)));
}

//calls Count function for number of prumpts and the tested numbers by the user
Count(numberOfPrompts, testedNumbers);
