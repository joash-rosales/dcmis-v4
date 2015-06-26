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
						<li><a href="Home.html" id="unact">Home</a></li>
						<li class="active"><a href="Patients.html" id="act">Patients</a></li>
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
<div class="container" id="additional">
	<button class="btn" id="savepatient"><a href="Patients.html">Save</a></button>
	<button class="btn" id="backpatient"><a href="Patients.html">Cancel</a></button>
	
</div>
</center>

<center>
<div class="container" id="addpatcontent">
	<div class="row">

	  	<div class="col-md-3">
	    	<div class="thumbnail">
	      		<img src="images/icon.jpg" alt="Add Photo" id="image">
	      			<div class="caption">
	        			<p><a href="#" class="btn btn-default" id="photo" role="button">Add Photo</a></p>
	      			</div>
	    	</div>
	  	</div>

	  	<div class="col-md-9">
	  		<div class="container" id="coninput">
		    	<div id="input">
		      		<label id="name1" for="name">Name:</label>
		    		<input type="text" id="name" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="add1" for="add">Address:</label>
		    		<input type="text" id="add" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="tell1" for="tell">Telephone:</label>
		    		<input type="text" id="tell" class="form-control">
		    	</div>
	    	</div>

	    	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="age1" for="age">Age:</label>
		    		<input type="text" id="age" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="sex1" for="sex">Sex:</label>
		    		<input type="text" id="sex" class="form-control dropdown-toggle" data-toggle="dropdown" role="button" id="unact">
							<ul class="dropdown-menu" role="menu">
								<li><a href="">Male</a></li>
								<li><a href="">Female</a></li>
							</ul>
		    	</div>

		    	<div id="input">
		      		<label id="ms1" for="ms">Marital Status:</label>
		    		<input type="text" id="ms" class="form-control dropdown-toggle" data-toggle="dropdown" role="button" id="unact">
							<ul class="dropdown-menu" role="menu">
								<li><a href="">Single</a></li>
								<li><a href="">Married</a></li>
								<li><a href="">Widow</a></li>
							</ul>
		    	</div>

		    	<div id="input">
		      		<label id="occu1" for="occu">Occupation:</label>
		    		<input type="text" id="occu" class="form-control dropdown-toggle" data-toggle="dropdown" role="button" id="unact">
							<ul class="dropdown-menu" role="menu">
								<li><a href="">text 1</a></li>
								<li><a href="">text 2</a></li>
								<li><a href="">text 3</a></li>
								<li><a href="">text 4</a></li>
								<li><a href="">text 6</a></li>
							</ul>
		    	</div>

		    	<div id="input">
		      		<label id="cell1" for="cell">Cellphone:</label>
		    		<input type="text" id="cell" class="form-control">
		    	</div>
	    	</div>

	    	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="oa1" for="oa">Office Address:</label>
		    		<input type="text" id="oa" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="tell1" for="tell">Telephone:</label>
		    		<input type="text" id="tell" class="form-control">
		    	</div>
	    	</div>

	    	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="com1" for="com">Complaint:</label>
		    		<input type="text" id="com" class="form-control">
		    	</div>
	    	</div>



	  	</div>
	</div>



	<div class="row">

	  	<div class="col-md-4">
	    	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="oh1" for="oh">Oral Hygiene:</label>
		    		<input type="text" id="oh" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="pc1" for="pc">Periodontal Condition:</label>
		    		<input type="text" id="pc" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="dent1" for="dent">Denture:</label>
		    	</div>

		    	<div id="input">
		      		<label id="up1" for="up">Upper:</label>
		    		<input type="text" id="up" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="since1" for="since">Since:</label>
		    		<input type="text" id="since" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="dent2" for="dent"></label>
		    	</div>

		    	<div id="input">
		      		<label id="low1" for="low">Upper:</label>
		    		<input type="text" id="low" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="since2" for="sinced">Since:</label>
		    		<input type="text" id="sinced" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="an1" for="an">Anomalies:</label>
		    		<input type="text" id="an" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="gen1" for="gen">General Conditions:</label>
		    		<input type="text" id="gen" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="phy1" for="phy">Physician:</label>
		    		<input type="text" id="phy" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="not1" for="not">Nature of treatment:</label>
		    		<input type="text" id="not" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="all1" for="all">Allergies:</label>
		    		<input type="text" id="all" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="hob1" for="hob">History of bleeding:</label>
		    		<input type="text" id="hob" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="ca1" for="ca">Chronic Ailments:</label>
		    		<input type="text" id="ca" class="form-control">
		    	</div>

		    	<div id="input">
		      		<label id="bp1" for="bp">Blood Pressure:</label>
		    		<input type="text" id="bp" class="form-control">
		    	</div>
		  	</div>

		  	<div class="container" id="coninput2">
		    	<div id="input">
		      		<label id="dbt1" for="dbt">Drugs being taken:</label>
		    		<input type="text" id="dbt" class="form-control">
		    	</div>
		  	</div>

	  	</div>





	  	<div class="col-md-8">
	  		<table class="table table-bordered" id="diagram">
	  			<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
				<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
			</table>
			<table class="table" id="diagram2">
	  			<tr id="table3">
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
				</tr>
				<tr id="table4">
					<td>18</td>
					<td>17</td>
					<td>16</td>
					<td>15</td>
					<td>14</td>
					<td>13</td>
					<td>12</td>
					<td id="mid">11</td>
					<td>21</td>
					<td>22</td>
					<td>23</td>
					<td>24</td>
					<td>25</td>
					<td>26</td>
					<td>27</td>
					<td>28</td>
				</tr>
			</table>

			<table class="table" id="diagram2">
				<tr id="table4">
					<td>48</td>
					<td>47</td>
					<td>46</td>
					<td>45</td>
					<td>44</td>
					<td>43</td>
					<td>42</td>
					<td id="mid">41</td>
					<td>31</td>
					<td>32</td>
					<td>33</td>
					<td>34</td>
					<td>35</td>
					<td>36</td>
					<td>37</td>
					<td>38</td>
				</tr>
	  			<tr id="table3">
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
				</tr>
			</table>
			<table class="table table-bordered" id="diagram3">
	  			<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
				<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
			</table>





			<center><div id="diagram6">
			<table class="table table-bordered">
	  			<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
				<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
			</table>
			<table class="table" id="diagram2">
	  			<tr id="table3">
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
				</tr>
				<tr id="table4">
					<td>55</td>
					<td>54</td>
					<td>53</td>
					<td>52</td>
					<td id="mid">51</td>
					<td>61</td>
					<td>62</td>
					<td>63</td>
					<td>64</td>
					<td>65</td>
				</tr>
			</table>

			<table class="table" id="diagram2">
				<tr id="table4">
					<td>85</td>
					<td>84</td>
					<td>83</td>
					<td>82</td>
					<td id="mid">81</td>
					<td>71</td>
					<td>72</td>
					<td>73</td>
					<td>74</td>
					<td>75</td>
				</tr>
	  			<tr id="table3">
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
					<td><div role="button"></div></td>
				</tr>
			</table>
			<table class="table table-bordered" id="diagram3">
	  			<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
				<tr id="table1">
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
					<td role="button"></td>
				</tr>
			</table>
			</div></center>


		</div>

	</div>
</center>




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

</body>	
</html>