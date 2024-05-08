<!-- JavaScript Display Possibilities -->
<!-- JavaScript can "display" data in different ways: -->

<!-- Writing into an HTML element, using innerHTML. -->
<!-- Writing into the HTML output using document.write(). -->
<!-- Writing into an alert box, using window.alert(). -->
<!-- Writing into the browser console, using console.log(). -->

<!-- Using innerHTML -->
<!-- To access an HTML element, JavaScript can use the document.getElementById(id) method. -->

<!-- The id attribute defines the HTML element. The innerHTML property defines the HTML content: -->


<!DOCTYPE html>
<html>
<body>

<h2>My First Web Page</h2>
<p>My First Paragraph.</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
</script>



<!-- Using document.write() -->
<!-- For testing purposes, it is convenient to use document.write(): -->


<script>
document.write(5 + 6);
</script>
<button type="button" onclick="document.write(5 + 6)">Try it</button>


<!-- Using window.alert() -->
<!-- You can use an alert box to display data: -->

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
window.alert(5 + 6);
</script>


<!-- You can skip the window keyword. -->

<!-- In JavaScript, the window object is the global scope object. This means that variables, 
properties, and methods by default belong to the window object. This also means that specifying 
the window keyword is optional: -->


<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
alert(5 + 6);
</script>


<!-- Using console.log() -->
<!-- For debugging purposes, you can call the console.log() method in the browser to display data. -->

<script>
console.log(5 + 6);
</script>

<!-- JavaScript Print -->
<!-- JavaScript does not have any print object or print methods. -->

<!-- You cannot access output devices from JavaScript. -->

<!-- The only exception is that you can call the window.print() method in the browser to print the 
content of the current window. -->

<button onclick="window.print()">Print this page</button>

</body>
</html> 