<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
 
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/starrr.css" />
<script src="js/starrr.js"></script>

    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
 
  
<head>
    <style>
 
        /* Styling the body */
        body {
            margin: 0;
            padding: 0;
        }
          
        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 100vh;
            background-image: url("1.jpg");
            background-size: cover;
        }
          
        /* Styling the left floating section */
        section .leftBox {
            width: 50%;
            height: 50%;
            float: left;
            padding: 50px;
            box-sizing: border-box;
        }
          
        /* Styling the background of
            left floating section */
        section .leftBox .content {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
            transition: .5s;
        }
          
        /* Styling the hover effect 
            of left floating section */
        section .leftBox .content:hover {
            background: #e91e63;
        }
          
        /* Styling the header of left
            floating section */
        section .leftBox .content h1 {
            margin: 0;
            padding: 0;
            font-size: 35px;
            text-transform: uppercase;
        }
          
        /* Styling the paragraph of
            left floating section */
        section .leftBox .content p {
            margin: 15px 0 0;
            padding: 0;
        }
          
        /* Styling the three events section */
        section .events {
            position: relative;
            width: 50%;
            height: 100%;
            background: rgba(0.5, 0.5, 0.5, 0.5);
            float: right;
            box-sizing: border-box;
        }
          
        /* Styling the links of
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 0;
            padding: 40px;
            box-sizing: border-box;
        }
          
        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: #fff;
            box-sizing: border-box;
            height: 150px;
            margin: 15px 0;
        }
          
        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: #262626;
            box-sizing: border-box;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
        }
          
        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: #e91e63;
        }
          
        /* Styling the header of time
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 60px;
            line-height: 30px;
        }
          
        /* Styling the texts of time
        class of events section */
        section .events ul li .time h2 span {
            font-size: 30px;
        }
          
        /* Styling the details
        class of events section */
        section .events ul li .details {
            padding: 15px;
            background: #fff;
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
        }
          
        /* Styling the header of the
        details class of events section */
        section .events ul li .details h3 {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }
          
        /* Styling the lists of details
        class of events section */
        section .events ul li .details p {
            position: relative;
            margin: 10px 0 0;
            padding: 0;
            font-size: 15px;
        }
          
        /* Styling the links of details
        class of events section */
        section .events ul li .details a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 15px;
            border: 1.5px solid #262626;
            margin-top: 8px;
            font-size: 15px;
            transition: .5s;
        }
          
        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: #e91e63;
            color: #fff;
            border-color: #e91e63;
        }
    </style>
</head>
<body>
    <section>
        <div class="leftBox">
            <div class="content text-warning">
                <br><h1>
                    Events and Shows!!
                </h1>  </div>
             <div class="content"><h4>         We are  excited to share our upcoming events with you</h4></div>  
   
                    
 
          
        </div><br>
        <div class="rightBox position-absolute bottom-0 start-10">
            <div class="content">
                <h4>
                    

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Leave Your Comments Here</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form >
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name"> 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>

</div>



                <button type="button" class="btn btn-outline-dark">  <a href ="PEvent.php"> Go To previous Event's coverage</a></button>
                </h4></div>

        </div>
       
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>
                            7 <br><span>September</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Where is the event happening?
                        </h3>
                         
<p>RESEARCH FOUNDATION-International Conference On Civil, Architectural 
    And Environmental Sciences (ICAES)	 ....Rawalpindi, Pakistan....      
    <a href="webpage1.php">View Details</a> 

                        </p>
 
  
                    </div>
                    <div style="clear: both;"></div>
                </li>
  
                <li>
                    <div class="time">
                        <h2>
                            10 <br><span> September </span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Where is the event happening?
                        </h3>
                         
<p>
ITAR-International Conference On Physical Education For Children 
And Youth With Visual Impairments (ICPECYVI)	 
....Karachi, Pakistan....           <a href="webpage2.php">View Details</a> 

                        </p>
 
                        
                    </div>
                    <div style="clear:both;"></div>
                </li>
  
                <li>
                    <div class="time">
                        <h2>
                            12 <br><span>September</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Where is the event happening?
                        </h3>
                         
<p>
                RESEARCH FOUNDATION-World Conference On Accountants (WCA)	 
                ....Rawalpindi, Pakistan.... <a href="webpage3.php">View Details</a>   
                                </p>
                    </div>
                    <div class="position-absolute bottom-0 start-10">
            <div class="content text-warning">
  <h5> Contact us at  bushrashahzad04@gmail.com or  03090909167</h5></div></div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
        </div>
    </section>
</body>
  
</html>