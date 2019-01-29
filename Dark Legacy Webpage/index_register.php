<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stellar Legacy | Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/main.css">
</head>

<body>
<!--Nav Bar-->
<nav class="navbar navbar-default">
  <div class="container-fluid titleHead" >
    <div class="navbar-header">
      <a class="navbar-brand titleClass" href="index.php">Stellar Legacy</a>
    </div>

    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li role="presentation">
		
		<a href="index_register.php">Register</a>

		</li>
		
		<li role="presentation">
		
		<a href="index_ranking.php?page=1&rank_type=1">Ranking</a>

		</li>
		
		<li role="presentation">
			<?php
				include_once __DIR__ . '/../httpdocs/PHP/server_status.php';
			?>
		</li>
		
		<li role="presentation">
			<?php
				include_once __DIR__ . '/../httpdocs/PHP/users_online.php';
			?>
		</li>

      </ul>
      <ul class="nav navbar-nav navbar-right pos">
		<li role="presentation">
		
		<a href="#">Download</a>

		</li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<!--Register Form-->
<center>
<h1>Sign Up</h1>
<div id="register_form">
	<form name="registration" method="post" action="PHP/register.php">
		<table class="table table-hover table-bordered">
		<tr>
			 <td colspan="3"> <input class="form-control" type="text" name="Username" value="" placeholder="Username"> </td>
		</tr>
		
		<tr>
			 <td colspan="3"> <input class="form-control" type="text" name="Email" value="" placeholder="E-Mail"> </td>
		</tr>
		
		<tr>
			<td colspan="3"> <input class="form-control" type="password" name="Password" value="" placeholder="Password"> </td>
		</tr>
		
		<tr>
			<td colspan="3"> <input class="form-control" type="password" name="rePassword" value="" placeholder="Re-Password"> </td>
		</tr>
		
		<tr>
			<td style="font-weight:bold; color:green;"> EEF<input type="radio" name="Company"  value=1 > </td>
			<td style="font-weight:bold; color:blue;"> UDC<input type="radio" name="Company"  value=2 ></td>
			<td style="font-weight:bold; color:red;"> CCP<input type="radio" name="Company"  value=3 >  </td>
		</tr>
		
		
		<tr>
		   <td colspan="3"> <input class="btn btn-primary" type="submit" name="submit" value="Register"> </td>
		</tr>
		
		</table>	
	</form>
</div>
</center>

<!--Message but it dont work correctly -.- -->
<?php 
if(isset($_GET['message']))
{
?>
		<?php 
		if($_GET['message'] == 0)
		{
		?>
		  <div class="alert alert-dismissible alert-info"><strong>Upps!</strong> Invalid Username!</div>
		<?php 
		}
		
		elseif($_GET['message'] == 1)
		{
		?>
		  <div class="alert alert-dismissible alert-info"><strong>Upps!</strong> Your Passwords dont match each other!</div>
		<?php 
		}
		elseif($_GET['message'] == 2)
		{
		?>
		  <div class="alert alert-dismissible alert-info"><strong>Upps!</strong> Your Passwords is to short!</div>
		<?php
		}
		elseif($_GET['message'] == 3)
		{
		?>
		  <div class="alert alert-dismissible alert-info"><strong>Upps!</strong> You didn't choosed a company!</div>
		<?php
		}
		elseif($_GET['message'] == 4)
		{
		?>
		  <div class="alert alert-dismissible alert-info"><strong>Upps!</strong> Username already exists!</div>
		<?php
		}
		elseif($_GET['message'] == 5)
		{
		?>
		  <div class="alert alert-dismissible alert-success"><strong>Yeah!</strong> Your account was successfully created!</div>
		<?php
		}
		?>
<?php 
}
?>

</div>
</body>

</html>
