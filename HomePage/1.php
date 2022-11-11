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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url("1.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #ffd700 !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block bg-black" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank">
          <strong>EAA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="Presenters.php">Presenters</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" rel="nofollow"
                target="_blank"></a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="WebPage.php" target="_blank">UpComing Events</a>
            </li> 
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="register.php">Login/SignUp</a>
            </li>            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/bushi.shahzad.9" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/BushraS40201485" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>    </header>

    <!-- Navbar -->
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong ">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100" >
          <div class="text-white">
         <h1><br></h1> <h1 class="mb-3 ">Events And Announcements</h1>
            <h5 class="mb-4 text-warning">Add and View Events</h5>
        
          </div>
        </div>
      </div>
      <div class= "text-center"><br><br><br><br><br><br><br> <br> <br><br><br><br><br><br>


 
<br><a class="btn btn-warning btn-lg m-2" href="insert.php" role="button"
              rel="nofollow" target="_blank">Add Events</a>
            <a class="btn btn-danger btn-lg m-2" href="display.php" target="_blank"
              role="button">View Events</a></div>
    </div>
 

    <div class=" bg-black text-lg-start ">
 
    <div class="py-4 text-center">

      <a role="button" class="btn btn-outline-warning btn-lg m-2" href="AboutUs.php" target="_blank">
About Us...      </a>
    </div>

 

    <div class="text-center py-4 align-items-center text-light">
      <h2>Follow Us On</h2>

      <a href="https://www.facebook.com/bushi.shahzad.9" class="btn btn-warning m-1" role="button" rel="nofollow"
        target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/BushraS40201485" class="btn btn-warning m-1" role="button" rel="nofollow"
        target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      
    </div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                  <br>Enter your Information</h5>
              
            </div>
            <div class="modal-body">
				<p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
    <script>

	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
</html>
