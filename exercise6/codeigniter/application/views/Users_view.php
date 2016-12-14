<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
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
	
body {
    background: url("http://127.0.0.1/exercise6/codeigniter/uploads/background.png");
    background-size: 1900px 1900px;
    background-repeat: no-repeat;
    padding-top: 40px;
}

a {
	font-size: 20px;
	color: red;
	}
	
p {
	font-size: 20px;
	color:orange;
	}
	
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 15px;
    border-bottom: 1px solid #000000;
}

</style>

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>

</head>

<body>
<h1><center>Exercise 6</h1>
<center>
<a href  ="<?php echo base_url();?>index.php/" target="_self">Home</a> |
<a href ="<?php echo base_url();?>index.php/users/info" target="_self">Info</a> |
<a href ="<?php echo base_url();?>index.php/users/askme" target="_parent">Ask me</a>
</center>
<p><center>Welcome to my Home Page.</p>
<img src="http://127.0.0.1/exercise6/codeigniter/uploads/cat.gif" style="width:420px;height:250px;">
<img src="http://127.0.0.1/exercise6/codeigniter/uploads/head.gif" style="width:420px;height:250px;">
<img src="http://127.0.0.1/exercise6/codeigniter/uploads/pikachu.gif" style="width:420px;height:250px;">
<div id="body">
	<div id="content">
		<table align="center">
			<tr>
				<td colspan="9" align="center"> <a href="<?php echo base_url();?>index.php/users/add_form" style="margin-left: 274px;font-weight: bold;">Add data here.</a></td>
			</tr>
			<tr>
				<th>Name</th>
				<th>Nickname</th>
				<th>Email</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cp_number; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>
<h4>-Dave Salcedo-</h4>
</body>

</html>	