<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        table{
            width: 100%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 5px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
<body>
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
      <h2><b>List Of All Events!!</b></h2>
      </div>  
<?php
    //storing database details in variables.
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bushra";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo  "<br>";
    }
    //Output Form Entries from the Database
    $sql = "SELECT id, Event_Name, Event_Details, Speaker,Location,City ,Timing FROM events";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table class="table-responsive-sm table table-bordered"> <tr> <th> id </th> <th> Event_Name </th> <th> Event_Details</th> <th> Speaker </th>  <th> Location </th> <th> City </th>  <th> Timing </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<tr > <td>' . $row["id"] . '</td>
           <td>' . $row["Event_Name"] . '</td>
           <td>' . $row["Event_Details"] . '</td>
           <td>' . $row["Speaker"] . '</td>
           <td>' . $row["Location"] . '</td>
           <td> ' . $row["City"] . '</td>
           <td>' . $row["Timing"] . '</td> </tr>';
       }
       echo '</table>';
    } 
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);
    
?>
</body>
</html>