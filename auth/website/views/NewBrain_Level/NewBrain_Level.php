<?php
	include_once 'includes/header.php';
?>
<style>

		.reward-container-reward-title-websitelevel {
			text-align: center;

			
		}
		.reward-container-reward-title-websitelevel {
			display:inline-block;
			margin-right:10px;
			border: 1px solid #0000;
			cursor: pointer;
			border-radius: 6px;
			transition: 0.2s;
			
		}
		.reward-container-reward-title-websitelevel:hover {
			
			border: 1px solid #0000;
			cursor: pointer;
			background-color: lightgray;
			transition: 0.5s;
		}
		
		</style>
<title><?= $config['hotelName'] ?>   </title>
<?php include 'controller/level.php'; ?>
<?= levelreward() ?>
	<div style="float:left; width: 49%;">
		
		
				<div style="margin-top: 20px;" class="panel-blue">&nbsp;&nbsp;&nbsp;<i style="float: right; margin-top: 15px; margin-right: 15px;" class="fa fa-id-card-o" aria-hidden="true"></i>Level Uitleg</div>
			
			
					<div class="panel-body">
					Jouw Huidige Level: <b><?php  echo $levelShow ?></b><br>
				   
                   Jouw totale XP: <b><?php echo User::userData('ls_experience') ?></b><br>
				   
                   <h4>Jouw Prestige: <?php  echo $prestigelevel ?></h4> </b>
				   <hr>
				   Hey, <b><?= User::userData('username') ?></b> kleine tip, ga van laag naar hoog claimen, anders blokkeer je alle onder staande. Hierdoor denkt het systeem dat je de vorige ook hebt geclaimed, maar dat is niet waar. Mocht dit gebeuren wij kunnen je niet helpen.
					
					<hr>
					Alhoewel, <b>Milan</b> in het hotel dit kan, <b>Milan</b> kan jouw level rewards resetten hierdoor kan je alles weer claimen wat bij jouw level toe behoort. Maar of dit gegarandeerd uitgevoert wordt door hem, is een vraag.
					</div>
				
						

</div>


<div style="float:right; width: 50%; margin-top: 20px;">
	<div class="panel-red">&nbsp;&nbsp;&nbsp; <i style="float: right; margin-top: 15px; margin-right: 15px;" class="fa fa-trophy" aria-hidden="true"></i>Level Prijzen</div>
		<div class="panel-body" style="height: 600px;">
				<div id="reward-container-websitelevel">
									<form method="POST">
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="<?= $config['htmlUrl'] ?>/img/levelprestige/prestige1.gif" width="40">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl5 ?>
											
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl10 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="<?= $config['htmlUrl'] ?>/img/levelprestige/prestige2.gif" width="40">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl15 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl20 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="<?= $config['htmlUrl'] ?>/img/levelprestige/prestige3.gif" width="40">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl25 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl30 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
										<img style="position: absolute;" src="<?= $config['htmlUrl'] ?>/img/levelprestige/prestige4.gif" width="40">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl35 ?>
										</div>
										<div class="reward-container-reward-title-websitelevel">
											<p><img src="<?= $config['htmlUrl'] ?>/img/present2.gif" width="80"></p>
											<p><?php echo $config['diamondTen']?> Diamanten</p>
											<?php echo $buttonlvl40 ?>
										</div>
										</form>
									</div>
			
		</div>
		


	</div>
	<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
	?>
		</div>
	</div>
</body>
</html>