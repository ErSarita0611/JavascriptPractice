



<!-- // JavaScript is the world's most popular programming language.

// JavaScript is the programming language of the Web.

// JavaScript is easy to learn. -->

<!DOCTYPE html>
<html>
<body>

<h2>My First JavaScript</h2>

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>



<!-- One of many JavaScript HTML methods is getElementById(). -->
<!-- JavaScript Can Change HTML Content -->

<h2>What Can JavaScript Do?</h2>

<p id="demo1">JavaScript can change HTML content.</p>

<button type="button" onclick='document.getElementById("demo1").innerHTML = "Hello JavaScript!"'>
Click Me!</button>


<!-- JavaScript Can Change HTML Attribute Values -->

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attribute values.</p>

<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>



<!-- JavaScript Can Change HTML Styles (CSS) -->
<h2>What Can JavaScript Do?</h2>

<p id="demo2">JavaScript can change the style of an HTML element.</p>

<button type="button" onclick="document.getElementById('demo2').style.fontSize='35px'">Click Me!</button>


<!-- JavaScript Can Hide HTML Elements -->

<!-- Hiding HTML elements can be done by changing the display style: -->

<h2>What Can JavaScript Do?</h2>

<p id="demo3">JavaScript can hide HTML elements.</p>

<button type="button" onclick="document.getElementById('demo3').style.display='none'">Click Me!</button>


<!-- The function is invoked (called) when a button is clicked: -->
<!-- JavaScript in <head> -->

<h2>Demo JavaScript in Head</h2>

<p id="demo4">A Paragraph.</p>

<button type="button" onclick="myFunction()">Try it</button>


<script>
function myFunction() {
  document.getElementById("demo4").innerHTML = "Paragraph changed.";
}
</script>

</body>
</html>
