/*Tanner Rodenburg
Table script for assignment 3.2 Question 1
8/30/2020
Bellevue University
*/

var number = 0;

//loop function to output table for the number, squared, and cubed values starting from 2-8
document.write('<table>');
document.write('<tr><th>Number</th><th>Squared</th><th>Cubed</th></tr>');
for (var number = 2; number < 9; number++) {
  document.write('<td>', number, '</td>',
    '<td>', (Math.pow(number, 2)), '</td>',
    '<td>', (Math.pow(number, 3)), '</td>',
    '</td></tr>');
}
document.write('</table>');
