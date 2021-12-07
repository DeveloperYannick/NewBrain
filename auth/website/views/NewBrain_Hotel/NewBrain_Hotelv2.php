<?php
	staffCheck();
	Game::sso('client');	
	Game::homeRoom();	
?>
<html>
</body>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?= $config['hotelName'] ?> - Speel</title>
	<script src="/templates/brain/client/js/jquery-latest.js" type="text/javascript"></script>
	<script src="/templates/brain/client/js/jquery-ui.js" type="text/javascript"></script>
	<script src="/templates/brain/client/js/flashclient.js"></script>
	<script src="/templates/brain/client/js/client.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/templates/brain/client/css/client.css?v=5" type="text/css">
	<link rel="stylesheet" href="/templates/fubbo/css/client/client.css?v=5" type="text/css">
	<script src="https://vindretros.nl/vindretros.js" id="vindretros" username="Sappo"></script>
	</head>
<body>
	
	<center>
		<div id="client-ui">
			<iframe src="/nitro-client/dist/index.html?sso=<?= User::userData('auth_ticket') ?>" id="flash-container" width="100%" height="100%" frameborder="0"></iframe>
		</div>
		
</body>
</html>
</center>
</div>
</head>
