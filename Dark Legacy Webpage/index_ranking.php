<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stellar Legacy | Ranking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/main.css">
</head>

<body method=post action="PHP/ranking.php">
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
<!--RankingTable-->
<center>
<div class="btn-group btn-group-justified">
  <a href="index_ranking.php?page=1&rank_type=1" class="btn btn-default">XP</a>
  <a href="index_ranking.php?page=1&rank_type=2" class="btn btn-default">Npc Kills</a>
  <a href="index_ranking.php?page=1&rank_type=3" class="btn btn-default">Player Kills</a>
  <a href="index_ranking.php?page=1&rank_type=4" class="btn btn-default">Ressources Collected</a>
</div>
<div class="container">
<br>
	<?php
		include_once __DIR__ . '/../httpdocs/PHP/ranking.php';
	?>
	
</center>
</div>

</body>

</html>
