<!DOCTYPE html>
<html lang="en">
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
</head>
<body>

<!-- Navbar -->
<div class="container"></div>
<div class="row">
        <div class="col-md-12 bg-secondary text-left">
            <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-window-minimize" style="color:white"></i>
            </button>
            <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-expand" style="color:white"></i>
</button>
            <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-xmark" style="color:white"></i>
            </button>
           
        </div>
    </div>             
        </div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
     
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-3 mt-lg-0" href="#">
        <img
          src="Img.php\IMG.PNG\Untitled design.png"
          width="50"
          height="50"Profile
          alt="Logo"
          loading="...."
        />
      </a>
      <button type="button" class="btn btn-dark  btn-lg me-4 text-center ">Services </button>
      <button type="button" class="btn btn-dark  btn-lg me-4 text-center ">Performance </button>
      <button type="button" class="btn btn-dark  btn-lg me-4 text-center ">About </button>


      <!-- Left links --><ul>
        <li class="nav-item">
        </li>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

      <!-- Notifications -->
     
        
        <div class="dropdown">
        <i class='fa fa-bell' style="color:white"></i>
  <button class="btn btn-dark dropdown-toggle m-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Notifications
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">What's New</a></li>
  </ul>
  
        </a> 
      </div>
      <!-- Avatar -->
      <div class="dropdown"> 
        <a></a>
        </ul>
          <img
            src="Img.php\IMG.PNG\Picture.png"
            class="rounded-circle"
            height="25"
            alt=" Portrait "
            loading="....."
          />
        </a>
  <button class="btn btn-dark dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
   Profile
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><a class="dropdown-item" href="#">Messages</a></li>
    <li><a class="dropdown-item" href="#">Settings</a></li>
  </ul>
         
        
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">
                    <img
            src="Img.php\IMG.PNG\Picture.png"
            class="rounded-circle text-center border"
            height="25"
            alt=" Portrait "
            loading="....."/>Bushra Shahzad</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa-solid fa-house"></i>
                            Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Recents</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class='fas fa-chalkboard'></i>

                                DashBoard</span>  </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa fa-cog" aria-hidden="true"></i>

                                Settings</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa fa-bell" aria-hidden="true"></i>

                            New Notifications</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa-solid fa-users"></i>
                            Employees</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fas fa-list"></i>
                                Employee List</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa-solid fa-clock"></i>
                                Overtime</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa fa-dollar-sign"></i>
                                Cash Advance</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                Schedule</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            Positions</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa-solid fa-briefcase"></i>
                                Position Titles</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                                <i class="fa-solid fa-arrow-right"></i>
                                Upcomming Positions</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Customers Sevice</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">
                            <i class="fa-solid fa-comment-dollar"></i>
                         Payroll</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img
            src="Img.php\IMG.PNG\Picture.png"
            class="rounded-circle"
            height="25"
            alt=" Portrait "
            loading="....."
          />
                    <span class="d-none d-sm-inline mx-1">Bushra Shahzad</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                    <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">
                    <i class="fa-solid fa-address-book"></i>
                    Contact us</span></a>
                            </li>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <div class="col col-md-9 text-dark  "><br>
                <button type="button" class="btn btn-secondary  btn-lg me-4">22 <br> Total Employees </button>
                
                <button type="button" class="btn btn-success btn-lg me-4">70.27%<br> On-Time Percentage</button>
                
                <button type="button" class="btn btn-warning  btn-lg me-4">5%<br> On-Time Today</button>
                
                <button type="button" class="btn btn-danger  btn-lg me-4">1%<br> Late Today</button>

         </div><br>
         <h2>Top Employees</h2><br>
         <div class="row">
         <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col"> Name</th>
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Komal</td>
      <td>Shahzad</td>
      <td>komal@gmail</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Iqra</td>
      <td>shahzad</td>
      <td>Iqra@gmail</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Beenish</td>

      <td>Beenish@gmail</td>
    </tr>
  </tbody>
</table>
<img
            src="Img.php\IMG.PNG\sustainability chart.webp" alt="Sustainability Chart">
</div>

            <p class="lead">
               
            <ul class="list-styled">
                
            </ul>
        </div>
        
    </div>
</div>



</div>

</body>
</html>
