<?php
	#    Output easy-to-read numbers
    function dotNumber($n) {
		// is this a number?
        if(!is_numeric($n)) return false;
		
        //strip any formatting
        $n = (0+str_replace(".","",$n));
        
		
		
        /*
        // now filter it;
        if($n>1000000000000) return round(($n/1000000000000),1).' trillion';
        else if($n>1000000000) return round(($n/1000000000),1).' billion';
        else if($n>1000000) return round(($n/1000000),1).' million';
        else if($n>1000) return round(($n/1000),1).' thousand';
        
        return number_format($n);
		*/
		
		return number_format($n);
    }

	
function printRanking()
{
	include '../httpdocs/PHP/connect.php';
	
	//Check Page Number
	$num_user_list = 50; //Number of User per Page 
	
	$page = intval( $_GET["page"] );
	$start_pos = ($page-1) * $num_user_list;
	$end_pos = ($page) * $num_user_list;
	
	//Switch Between Ranking Type
	$rank_type = $_GET["rank_type"];
	$sql_rank = "";
	switch($rank_type)
	{
		case 1: //XP
				$sql_rank = "SELECT * FROM sl_user ORDER BY Xp DESC LIMIT $start_pos,$end_pos"; 
				$column_name = "XP";
				$endresult = "Xp";
		break;		
		
		case 2: //NPC kills / 	all npc1, npc2..// format: POS - COMPANY - NAME - NPC Kills`
				$sql_rank = "SELECT Username, Company ,NPCKill1 + NPCKill2 + NPCKill3 + NPCKill4 + NPCKill5 + NPCKill6 + NPCKill7 + NPCKill8 + NPCKill9 + NPCKill10 + NPCKill11 AS summe FROM sl_user ORDER BY summe DESC LIMIT $start_pos,$end_pos";
				$column_name = "NPC-Kills";
				$endresult = "summe";
		break; 
	
		case 3: //Player kills // Ratio Pts format: POS - COMPANY - NAME - Killed PLayers - Points
				$sql_rank = "SELECT * FROM sl_user ORDER BY MaxPlKillRatioPts DESC LIMIT $start_pos,$end_pos";
				$column_name = "Player-Kills";
				$endresult = "MaxPlKillRatioPts";
		break; 
		
		case 4://ress collected // all togheter , MaxResCollected../ format: POS - COMPANY - NAME - Whole Collected
				$sql_rank = "SELECT Username, Company ,MaxRessCollNb1 + MaxRessCollNb2 + MaxRessCollNb3 + MaxRessCollNb4 AS summe2 FROM sl_user ORDER BY summe2 DESC LIMIT $start_pos,$end_pos";
				$column_name = "Total Ress. Collected";
				$endresult = "summe2";
		break; 
	}

    $result = mysql_query($sql_rank);
    $name = "undefined";
    $type_value = 0;
    $pos = 0;
	$company = 0;
	$company_name = "";
	$company_color_style = "";
	$bold = '';
	
	//Create Table
	echo "<table style='table-layout:fixed;text-align:center;' class='table table-striped table-hover table-bordered'>";
		echo "<tr>";
			echo"<th>";
			  echo"Position";
			echo"</th>";
			
			echo"<th>";
			  echo"Company";
			echo"</th>";
			
			echo"<th>";
			  echo"Name";
			echo"</th>";
			
			echo"<th>";
			  echo"$column_name";
			echo"</th>";	
		echo "</tr>";
	//Fetch Data
    while($rs = mysql_fetch_array($result))
    {    
        $pos += 1;
		$name = $rs["Username"];
		$company = $rs["Company"];
		$type_value = $rs["$endresult"];
		
		switch($company)
		{
			case 1:
				$company_name = "EEF";
				$company_color_style = 'color:green;';
			break;
			
			case 2:
				$company_name = "UDC";
				$company_color_style = 'color:blue;';
			break;
			
			case 3:
				$company_name = "CCP";
				$company_color_style = 'color:red;';
			break;
				
		}
		
		
		//Add a dot to the number
		$dotVALUE = dotNumber($type_value);
		
		//Draw Table
		  echo "<tr>";
		  
		    echo"<td>";
			  echo"$pos.";
		    echo"</td>";
			
			echo"<td style='".$company_color_style."'>";
			  echo"$company_name";
		    echo"</td>";
			
			echo"<td>";
			  echo"$name";
		    echo"</td>";
			
			echo"<td>";
			  echo"$dotVALUE";
		    echo"</td>";
			
		  echo "</tr>";
    }
	echo"</table>";
	
	//Page-Navbar
	echo '<ul class="pagination">';
	for($i=1; $i<= $pos ; $i+=1)
	{
		if( $pos >= ($i-1)*$num_user_list )
		{
			if( $i == $page )
			{
				echo '<li class="active"><a href="index_ranking.php?page='.$i.'&rank_type='.$rank_type.'">'.$i.'</a></li>';
			}
			else
			{
				echo '<li><a href="index_ranking.php?page='.$i.'&rank_type='.$rank_type.'">'.$i.'</a></li>';
			}
		}
	}
	echo '</ul>';
}
?>
<center>
<?php printRanking(); ?>
</center>