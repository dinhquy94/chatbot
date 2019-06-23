<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CyberrBot: Created by Shehzad Shaikh</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.js"></script>
		<script src="js/chatbot.js">
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div id="header">
			<h1>CyberrBot v1.0</h1>
			<h4 style="position:fixed; top:15px; right:16px; color:white"><a href="http://www.shehzadshaikh.com">Visit Developer's Website</a></h4>
		</div>
		<div id="container">
			
		</div>
		<div id="controls">
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 msgbox">
				<textarea name="" id="textbox" placeholder="Enter your message" class="form-control"></textarea>
				<div class="checkbox">
					<label>
						<input checked type="checkbox" id="enter">
						Send on Enter
					</label>
				</div>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 sendbtn">
				<button id="send" class="btn btn-default"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
			</div>
		</div>
	</body>
</html>