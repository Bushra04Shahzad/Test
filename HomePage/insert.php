<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="1.php">Events and Announcements</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container bg-warning ">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-7">
    <div class="wrapper ">
      <div class="text-danger text-center">
      <h2><b>Add New Event!!</b></h2>
        <p>Please fill this form to Add a new event.</p>
      </div>  
	<form method="post" action="process.php" style=" width: 50vw; margin-left : 25vw;">
    <b> Event_Name</b>:<br>
		<input type="text" name="Event_Name" size="50"> 
		<br>
		<b>Event_Details</b>:<br>
		<input type="text" name="Event_Details"  size="50">
		<br>
        <b>Speaker</b>:<br>
		<input type="text" name="Speaker" size="50">
		<br>
       <b> Location</b>:<br>
		<input type="text" name="Location"  size="50">
        <br>
       <b> City</b>:<br>
		<input type="text" name="City"  size="50">
        <br>
        <b>Timing</b>:<br>
		<input type="text" name="Timing"  size="5">
		<br><br>
		<input class="btn btn-outline-danger" type="submit" name="save" value="submit">
	</form>
    
  </body>
</html>