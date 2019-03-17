
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dbmsadmin2.css">
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
      </li>
       <li class="nav-item">
        <a class="nav-link " href="#">Contact</a>
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
	<h3>Advanced Search</h3>
	<hr>
	<form method="GET" action="admin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Disaster</label>
    <input name="type" type="Type" class="form-control" id="exampleInputtype" aria-describedby="typeHelp" placeholder="Enter Disaster Name"></div>
        <div id="button_align">
    <a class="btn btn-primary btn-info" href="results.php">Search</a></div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Victim</label>
    <input name="location" type="Location" class="form-control" id="exampleInputLocation" aria-describedby="locationHelp" placeholder="Enter Victim name"></div>
    <div id="button_align">
    <a class="btn btn-primary btn-info" href="results.php">Search</a></div>
   
   <div class="form-group">
    <label for="exampleInputPassword1">Relief Camp</label>
    <input name="location" type="Location" class="form-control" id="exampleInputLocation" aria-describedby="locationHelp" placeholder="Enter Relief Camp Name"></div>
    <div id="button_align">
    <a class="btn btn-primary btn-info" href="results.php">Search</a></div>
   
    


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