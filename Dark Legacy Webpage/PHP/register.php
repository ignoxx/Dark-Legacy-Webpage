<?php 


include('../PHP/connect.php');

$username = mysql_real_escape_string($_POST['Username']);
$password = mysql_real_escape_string($_POST['Password']);
$re_password = mysql_real_escape_string($_POST['rePassword']);
$email = mysql_real_escape_string($_POST['Email']);
$company = mysql_real_escape_string($_POST['Company']);


$result = mysql_query ("SELECT * FROM sl_user WHERE Username='$username'");
$nbr = mysql_num_rows($result) ;

if( $username != "" )
{
	if( $password == $re_password )
	{
		if( strlen( $password ) >= 4 )
		{
			if( isset($company) && !empty($company) )
			{
				switch($company)
				{
					case 1:
						$x = 1500 ;
						$y = 1500;
						$map = 1;
					break;
						
					case 2:
						$x = 18500;
						$y = 1500;
						$map = 6;
					break;
					
					case 3:
						$x = 1500;
						$y = 18500;
						$map = 11;
					break;
				}
				if( $nbr == 0 )
				{
					mysql_query( 'INSERT INTO sl_user (Username,Password,Email, Company, Banned, rank, Online, Ship, Skin, X, Y, Map, Cash, Hp ,L1,B1,P1,Amo1,Amo2,Amo3,Amo4,Amo5,Ro1,Ro2,Ro3,Ro4) VALUES ("'.$_POST["Username"].'","'.$_POST["Password"].'","'.$_POST["Email"].'","'.$_POST['Company'].'","0","0","0","1","0","'.$x.'","'.$y.'","'.$map.'","100000","1000","5","2","2","10000","5000","2500","5000","2500","2000","1500","1500","0")') or die(mysql_error());
																																																
					header('location: ../index_register.php?message=5'); //Well Done
				}
				else
				{
					header('location: ../index_register.php?message=4'); //Username Already exists
				}
			}
			else
			{
				header('location: ../index_register.php?message=3'); //Company not Selected
			}
		}
		else
		{
			header('location: ../index_register.php?message=2'); //Password to short
		}
	}
	else
	{
		header('location: ../index_register.php?message=1'); //Password dont match each other
	}
}
else
{
	header('location: ../index_register.php?message=0'); //Invalid Username
}

?>