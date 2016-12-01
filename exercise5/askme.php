<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "My full name is John Dave Baylon Salcedo.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "I lived at Villamor Air Base Pasay City.";
	}
	function myFunction3() {
    document.getElementById("demo").innerHTML = "I am 18 years old.";
	}
	function myFunction4() {
    document.getElementById("demo").innerHTML = "I used to collect Shoes especially Vans and I play different genre of games.";
	}
	function myFunction5() {
    document.getElementById("demo").innerHTML = "Anything except vegetables.";
	}
</script>

<style>

.error {color: #FF0000;}

h1 {
    font-style: italic;
	font-size: 50px;
	 color: white;
	}
	
p {
	font-size: 20px;
	color: red;
	}
	

body {
    background: url("background.png");
    background-size: 2500px 2500px;
    background-repeat: no-repeat;
    padding-top: 40px;
}	

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 2px solid #000000;
}

a {
	font-size: 20px;
	color: red;
	}
</style>
</head>
<body>
<h1><center>Exercise 5</h1>
<center>
<a href="index.php" target="_self">HOME</a> |
<a href="info.php" target="_self">INFO</a> |
<a href="askme.php" target="_parent">ASK ME</a>  </center>
<p><center>Welcome to my Home Page.</p>

<img src="cat.gif" style="width:420px;height:250px;">
<img src="head.gif" style="width:420px;height:250px;">
<img src="pikachu.gif" style="width:420px;height:250px;">


<h1>Ask anything about myself.</h1>
<p id="demo"></p>


<table>
  <tr>
    <th>What is my full name?</th>
    <th>Where do I lived?</th>
    <th>How old I am?</th>
	<th>What are the things that interest me?</th>
	<th>What are my favorite foods?</th>
  </tr>
  <tr>
    <td><button type="button" onclick="myFunction()">Try it</button></td>
    <td><button type="button" onclick="myFunction2()">Try it</button></td>
	<td><button type="button" onclick="myFunction3()">Try it</button></td>
    <td><button type="button" onclick="myFunction4()">Try it</button></td>
	<td><button type="button" onclick="myFunction5()">Try it</button></td>
  </tr>
</table>
<h4>-Dave Salcedo-</h4>
</body>
</html>