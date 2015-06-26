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
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
						<li><a href="Home.html" id="unact">Home</a></li>
						<li><a href="Patients.html" id="unact">Patients</a></li>
						<li class="active"><a href="Schedules.html" id="act">Schedules</a></li>
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
<div class="container" id="additional">
	<button class="btn" id="addsched" data-toggle="modal" data-target="#myModal">Add new schedule</button>

	<div class="input-group">
	    <input type="text" class="form-control" placeholder="Search Patient">
	    <span class="input-group-btn">
	        <button class="btn" type="button" id="search"><span class="glyphicon glyphicon-search"></span></button>
	    </span>
	</div>

	<!--POPUP MODALS FOR THE OPTIONS-->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  	<div class="modal-dialog">
				    <div class="modal-content">
				      	<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <center><h4 class="modal-title" id="myModalLabel">New Schedule</h4></center>
				      	</div>
				      	<div class="modal-body">
				        
					        <div class="container">
					        	<div class="row">
							        <div class='col-md-4'>
								        <div class="form-group">
								        	<label for="element1">Patient</label>
								        	<input type="text" id="element1" class="form-control">
								        </div>
								    </div>				    
								</div>
							</div>  

							<div class="container">
					        	<div class="row">
							        <div class='col-md-4'>
								        <div class="form-group">
								        	<label for="datetimepicker1">Date / Time</label>
							                <div class='input-group date' id='datetimepicker1'>
							                    <input type='text' class="form-control" />
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
							            </div>
								    </div>		    
								</div>
							</div>

							<div class="container">
					        	<div class="row">
							        <div class='col-md-4'>
								        <div class="form-group">
								        	<label for="element4">Description/Observation</label>
								        	<input type="text" id="element4" class="form-control">
								        </div>
								    </div>				    
								</div>
							</div>

				   
							    <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							        <button type="button" class="btn btn-primary">Save</button>
							    </div>
						</div>
					</div>
				</div>
			</div>
</div>
</center>

<center>
<div class="container" id="schedcontent">

		<!--TABLE FOR THE PATIENTS-->
		<div class="container" id="rec">
			<table class="table table-hover table-bordered">
				<tr id="tabletitle">
					<td><b>Patient</b></td>
					<td><b>Time / Date</b></td>
					<td><b>Description</b></td>
					<td><b>Options</b></td>
				</tr>
				<tr id="names">
					<td><a href="">Aliza Talibong</a></td>
					<td>12:00pm 04-12-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
					<tr id="names">
					<td><a href="">Joash Rosales</a></td>
					<td>08:00pm 06-11-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
				</tr>
					<tr id="names">
					<td><a href="">Edwin Cabatuan Jr.</a></td>
					<td>03:40pm 08-31-16</td>
					<td>igrfoierfi ekrjiuefbier sehbtvi sejhhrvbwse</td>
					<td><span class="btn glyphicon glyphicon-pencil"></span> <span class="btn glyphicon glyphicon-trash"></span></td>
				</tr>
			</table>

		</div>

			<nav>
				<center>
					<ul class="pagination">
					    <li class="disabled"><a href="#" aria-label="Previous">
					    	<span aria-hidden="true">&laquo;</span></a>
					    </li>
					    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					    <li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#" aria-label="Next">
						    <span aria-hidden="true">&raquo;</span>
						    </a>
						</li>
					</ul>
			  	</center>
			</nav>
</div>




<!--
<div id="desc">
	<h3>Background of the Study</h3><br>
	<p>A dental clinic in Iligan City, owned by Dr. Deborah Villanueva, struggles on finding the right system for the dental clinic. Dr. Villanueva wanted to find a Dental Clinic Management Information System that fits the dental clinic’s business process.</p>
</div>
-->

<footer>

	<div class="container">
	<img src="images/foot1.jpg" class="widewrapper" id="footerback">	
		<div class="row">
			<div class="col-md-4">
				<img src="images/logo2.png" id="foimg">
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

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
			    locale: 'en-ca'
			});
        });
    </script>

    <script type="text/javascript">
      	$(function () {
          	$('#datetimepicker3').datetimepicker({
              	format: 'LT'
          	});
      	});
    </script>

</body>	
</html>