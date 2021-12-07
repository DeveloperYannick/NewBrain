<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Badges</title>
</head>
<?php
	if(strpos($_SERVER['REQUEST_URI'],"Diamond") || strpos($_SERVER['REQUEST_URI'],"Credits") || strpos($_SERVER['REQUEST_URI'],"Already")) {
		switch(str_replace("/BadgeShop","",$_SERVER['REQUEST_URI'])) {
			case "Already":
				echo "<div style='border-top: darkred solid 30px; top: 20px; right: 20px; z-index: 10000; background-color: white; position: absolute; width: 150px; height: 100px;'><div style='width: 155px; margin-top: -25px; color: black; position: absolute; text-align: center;'>Error</div><div style='position: absolute; right: -10px; margin-top: -28px; width: 150px;'><a style='text-decoration: none; font-size: 18px; font-weight: 600; color: black; position: absolute;' href='BadgeShop'>X</a></div><div style='text-align: center; margin-top: 10px; width: 150px;'>Je hebt deze badge al!</div></div>";
			break;
			case "Diamond":
				echo "<div style='border-top: darkred solid 30px; top: 20px; right: 20px; z-index: 10000; background-color: white; position: absolute; width: 150px; min-height: 100px; height: auto;'><div style='width: 155px; margin-top: -25px; color: black; position: absolute; text-align: center;'>Error</div><div style='position: absolute; right: -10px; margin-top: -28px; width: 150px;'><a style='text-decoration: none; font-size: 18px; font-weight: 600; color: black; position: absolute;' href='BadgeShop'>X</a></div><div style='text-align: center; margin: 10px 0; width: 150px;'>Je hebt te weinig diamanten voor deze badge!</div></div>";
			break;
			case "Credits":
				echo "<div style='border-top: darkred solid 30px; top: 20px; right: 20px; z-index: 10000; background-color: white; position: absolute; width: 150px; min-height: 100px; height: auto;'><div style='width: 155px; margin-top: -25px; color: black; position: absolute; text-align: center;'>Error</div><div style='position: absolute; right: -10px; margin-top: -28px; width: 150px;'><a style='text-decoration: none; font-size: 18px; font-weight: 600; color: black; position: absolute;' href='BadgeShop'>X</a></div><div style='text-align: center; margin: 10px 0; width: 150px;'>Je hebt te weinig credits voor deze badge!</div></div>";
			break;
		}
	}
?>
<body>
	<div class="container">
        <div class="row">
			<div class="col-8">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:green;background-image:url(/auth/assets/img/rijk.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Badges Kopen</font></div>
						<div class="desc"><font color="white">Vanaf nu kan je badges kopen</font></div>
					</div>
					<div class="png20">
					 <table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td style='color:white;'><b>Badge</b></td><td style='color:white;'><b></b></td><td style='color:white;'><b></b></td></tr></strong></b>
								<tbody>
								<?php
									$stmt = $dbh->prepare("SELECT * FROM badge_shop order by id");
									$stmt->execute();
									while($row = $stmt->fetch()) {
										echo'<div style="display: flex; flex-direction: row;"><div style="width: 20%;"><img alt="badges" src="../../../auth/nitro/c_images/album1584/'.$row["badge_id"].'.gif"></div>';
										if ($row["cost_credits"] > 0) {echo '<div style="color:white;"><div style="width: 40%; color:"white;"><img src="/auth/assets/img/credits.png">'." ",htmlspecialchars($row['cost_credits']).'</div>';}
										else if ($row["cost_points"] > 0) {echo '<div style="width: 40%; color:white;"><img src="/auth/assets/img/diamonds.png">'." ",htmlspecialchars($row['cost_points']).'</div>';}
										echo'<form action="/ShopAction" method="post"><input type="hidden" name="badge_id" value="'.$row["badge_id"].'"><input type="hidden" name="cost_points" value="'.$row["cost_points"].'"><input type="hidden" name="cost_credits" value="'.$row["cost_credits"].'"><div style="width: 40%;"><button style="color: black;" class=btn green next-register name="buy" type="submit">Koop</button></div></form></div>';									}
								?>
							</table>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:blue;background-image:url(/auth/assets/img/informatie.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Hoe werkt dit?</font></div>
						<div class="desc"><font color="white">Uitleg over de badges shop.</font></div>
					</div>
					<div style="text-align: center;" class="png20">
				       Eindelijk kan je badges kopen op <?= $config['hotelName'] ?> website.
					   Alhoewel het nog in verder ontwikkeling is.
					</div>
				</div>
			</div>
        </div>
			
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Footer.php';
?>
        </div>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>