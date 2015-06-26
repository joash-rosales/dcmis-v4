<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dental Care</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"><link href="css/font-awesome.min.css" rel="stylesheet">

    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
</head>



<body>

	<header>
		<nav class="navbar navbar-fixed-top" role="navigation"> <!--navbar-fixed-top-->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle"collapse" data-target"#example"></button>

					<!--LOGO-->
					<div class="navbar-brand"><a href="Home.html"><img src="images/logo2.png"></a></div>
				</div>

				<!--MENU-->
				<div class="collapse navbar-right navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li class="active"><a href="Home.html" id="act">Home</a></li>
						<li><a href="Patients.html" id="unact">Patients</a></li>
						<li><a href="Schedules.html" id="unact">Schedules</a></li>
						<li><a href="Inventory.html" id="unact">Inventory</a></li>
								
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="unact"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="unact">
								<li><a href="">View Profile</a></li>
								<li><a href="">Edit Profile</a></li>
								<li><a href="">Settings</a></li>
								<li class="divider"></li>
								<li><a href="">Logout</a></li>
							</ul>
						</li>
					</ul>
							
				</div>
			</div>
		<center><div id="navshadow"></div></center>
		</nav>
	</header>


<center>
<div class="container" id="homecontent">

	<center>
	<div class="container" id="tooth1" role="button">
		<h1>06</h1>
		<small>Added items<br>for inventory</small>
	</div>

	<div class="container" id="tooth2" role="button">
		<h1>22</h1>
		<p>Scheduled appointments<br>as of today</p>
	</div>

	<div class="container" id="tooth3" role="button">
		<h1>13</h1>
		<p>Added patients<br>as of today</p>
	</div>

	<div class="container" id="tooth4" role="button">
		<h1>04</h1>
		<small>Annual, Monthly,<br>Daily Reports</small>
	</div>
	</center>

	<div id="desc">
		<h3>Background of the Study</h3><br>
		<p>A dental clinic in Iligan City, owned by Dr. Deborah Villanueva, struggles on finding the right system for the dental clinic. Dr. Villanueva wanted to find a Dental Clinic Management Information System that fits the dental clinic’s business process. A dental clinic in Iligan City, owned by Dr. Deborah Villanueva, struggles on finding the right system for the dental clinic. Dr. Villanueva wanted to find a Dental Clinic Management Information System that fits the dental clinic’s business process.</p>
	</div>

</div>



</center>





<footer>

	<div class="container">	
	<img src="images/foot1.jpg" class="widewrapper" id="footerback">
		<div class="row">
			<div class="col-md-4">
				<img src="images/logo2.png">
					<p id="p">Deborah Battung Villanueva Dental Clinic</p>
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<h4>Contacts</h4>
						<small>Tel. No. (063) 222 1508<br>Cell. No. 0906-606-8518</small>
					</div>
					<div class="col-md-4">
						<h4>Address</h4>
						<small>2nd Floor, 1st Valley Bank Bldg.<br>Roxas Ave. cor De Leon St.<br>
							Iligan City</small>						
					</div>
					<div class="col-md-4">
						<h4>Developers</h4>
						<small>edwin.cabatuanjr@gmail.com<br>joash.rosales@g.msuiit.ed.ph<br>
							liz.talibong@gmail.com.<br>MSU-IIT</small>		
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>









	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/id.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/en-ca.js" charset="UTF-8"></script>

</body>	
</html>