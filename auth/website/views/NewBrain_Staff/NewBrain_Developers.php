<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Developers</title>
</head>

<body>

	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">Developers</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE rank = 11");
$getMembers->execute();
if ($getMembers->RowCount() > 0)
{
while ($member = $getMembers->fetch())
{
$username = filter($member['username']);
$motto = filter($member['motto']);
$look = filter($member['look']);
$lastonline = filter($member['last_online']);
$online = filter($member['online']);
$functie = filter($member['functie_site']);
$functie_uitleg = filter($member['functie_uitleg']);
if($online == 1){ $OnlineStatus = "<img src='/templates/flunno/style/images/cms/online.gif'>"; } else { $OnlineStatus = "<img src='/templates/flunno/style/images/cms/offline.png'>";}
?>
                <div class="col-4">
                    <a href='/home/<?php echo $username; ?>' class="dev-box">
                        <div class="dev-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
                        <div class="avatarimage" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png" style="height: 54px">
                            <div class="motto"><?php echo $functie_uitleg; ?></div>
                            <div class="online-status"><?php echo $OnlineStatus; ?></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    
<?php
}
}
else
{
echo "<p style='margin-left:10px;'>".$lang['Snostaff'];"</p>";
}
}
?>
            </div>
            </table>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="max:height 100px;height: 200px;position: relative; left: 200%;top: -125px;">
					<div class="title-box png20" style="background-color:gray;background-image:url(/templates/yada/img/informatie.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Developers</font></div>
						<div class="desc"><font color="white">Uitleg over de Developers.</font></div>
					</div>
					<div style="text-align: center;" class="png20">
                    De Ontwikkelaars van <?= $config['hotelName'] ?> zorgen ervoor dat jij zonder gedoe, bugs en foutjes het hotel flexibel en zonder irritatie kan spelen.
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