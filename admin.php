
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dbmsadmin.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	
	<title>User</title>
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">AMRITA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Advanced
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Search Disaster</a>
          <a class="dropdown-item" href="#">Search Victim</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Search Relief Camp</a>
        </div>
      </li>

    </ul>
    <div class="container">
    	
    </div>
     
      
      <a class="btn btn-outline-success btn-info" href="index.php">Logout</a>
    
  </div>
</nav>

<div class="container">
	<div id="welcome">
	<div class="col-lg-6">
	<h1> Welcome back!</h1>
	<hr>
	<form method="GET" action="admin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Disaster Type</label>
    <input name="type" type="Type" class="form-control" id="exampleInputtype" aria-describedby="typeHelp" placeholder="Enter Type">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Disaster Location</label>
    <input name="location" type="Location" class="form-control" id="exampleInputLocation" aria-describedby="locationHelp" placeholder="Enter Location">
   </div>

  <form method="post">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="Date"/>
      </div>
      
     </form>
     <div id="search_button">
 <!--  <input type="submit" value="Submit"> -->
  <a class="btn btn-primary btn-info" href="results.php">Search</a>
  </div>




</form>
</div>
</div>
</div>

 <script
			  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>