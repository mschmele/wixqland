<!DOCTYPE html>
<html lang="en">
<head>
	<title>WIXQ guerilla site</title>
	<!-- Jquery & bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<!-- neat lil font -->
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<!-- local scripts/styles -->
	<script src="konami.js" type="text/javascript"></script>
	<script src="index.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!--favicon-->
	<link rel="icon" 
      type="image/png" 
      href="http://i.imgur.com/YoqP0wh.jpg">

</head>
<body>

	<div id="dvBodyWrapper">

		<!-- HEADER -->
		<a id="dvLogoHeader"> 
			<div>
				<!--<img src="http://www.millersville.edu/csil/Images/Logos/WIXQ.png" />-->
				<img src="http://i.imgur.com/FiWUd2j.png" />
			</div>
		</a>
		<div id="dvHeaderBottom"></div>
		
		<!-- END HEADER -->
		<div id="dvBody" class="main-color">
			<div id="dvPlayerBackground"></div>

				<div id="dvAbout"> WIXQ is your number one music source! <br />
						 broadcasting in the Lancaster/Millersville area <br />
						 call us at 717-871-7075</div>
				<div id="dvFancyPlayer">
					<a id="playerText">listen live!</a>
					<a id="btnPlayPause">
						<span class="butt glyphicon glyphicon-play"></span>
					</a>
					<a id="btnMute" class="hidden">
						<span class="butt glyphicon glyphicon-volume-up"></span>
					</a>
				</div>

				<div id="dvRequestLabel" class="sectionHeader"> 
					make a request!
					<hr width="20%" />
				</div>
				<div id="request-received">This isn't working yet but you can always call us</div>
				<div id="dvRequestForm" class="form-group">
				<form class="php-json-submit" action="request.php" method="post">
						<div><input class="requestForm form-control" type="text" id="song" name="song" placeholder="song name"></input></div>
						<div><input class="requestForm form-control" type="text" id="artist" name="artist" placeholder="artist"></input></div>
						<div><input class="requestForm form-control" type="text" id="requester" name="requester" placeholder="requested by"></input></div>
						<div><input class="btn disabled" type="submit" id="btnSubmitRequest" value="submit"></input></div>
				</form>
				</div>
				<div class="clearfix"></div>

				<div id="dvPGridLabel" class="sectionHeader">
					video stream!
					<hr width="20%" />
				</div>
		</div>

		<div class="main-color">
		<div id="dvProgramGrid">
			<!-- NEAT -->
			<img class="not-watching" src="http://i.imgur.com/jSTMtGM.png" />
		</div>

		<div id="dvFooter">
			<div class="dvOrangeFooter">
				<h1>here be the footer</h1>
			</div>

			<div class="dvGreyFooter"></div>
		</div>
		</div>
	<audio id="audioStream">
	  <source src="http://166.66.176.252:8004/;?icy=http" type="audio/mpeg" />
	</audio>
	<audio id="womboCombo">
		<source src="http://www.myinstants.com/media/sounds/wombo-combo.mp3" />
	    your browser don't support the audio stuff
	</audio>
</body>
</html>