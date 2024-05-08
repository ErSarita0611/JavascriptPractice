<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Statements</h2>

<p>A <b>JavaScript program</b> is a list of <b>statements</b> to be executed by a computer.</p>

<p id="demo"></p>

<script>
let x, y, z;  // Statement 1
x = 5;        // Statement 2
y = 6;        // Statement 3
z = x + y;    // Statement 4

document.getElementById("demo").innerHTML =
"The value of z is " + z + ".";  
</script>


<!-- Semicolons ; -->
<!-- Semicolons separate JavaScript statements. -->

<!-- Add a semicolon at the end of each executable statement: -->
<p id="demo1"></p>
<script>
let a, b, c;
a = 5;
b = 10;
c = a+b;
document.getElementById("demo1").innerHTML = c;

</script>

<!-- JavaScript White Space -->
<!-- JavaScript ignores multiple spaces. You can add white space to your script to make it more readable. -->

<!-- JavaScript Line Length and Line Breaks -->

<p id="demo2"></p>

<script>
document.getElementById("demo2").innerHTML =
"Hello Dolly!";
</script>

<!-- JavaScript Code Blocks -->
<!-- JavaScript statements can be grouped together in code blocks, inside curly brackets {...}. -->

<!-- The purpose of code blocks is to define statements to be executed together. -->

<!-- One place you will find statements grouped together in blocks, is in JavaScript functions: -->

<h2>JavaScript Statements</h2>

<p>JavaScript code blocks are written between { and }</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<p id="demo3"></p>
<p id="demo4"></p>

<script>
function myFunction() {
  document.getElementById("demo3").innerHTML = "Hello Dolly!";
  document.getElementById("demo4").innerHTML = "How are you?";
}
</script>

<!-- JavaScript Keywords -->

<!-- Keyword	Description -->

<!-- var	 - Declares a variable
let	- Declares a block variable
const -	Declares a block constant
if - Marks a block of statements to be executed on a condition
switch - Marks a block of statements to be executed in different cases
for - Marks a block of statements to be executed in a loop
function - 	Declares a function
return -	Exits a function
try  - 	Implements error handling to a block of statements -->

</body>
</html>
