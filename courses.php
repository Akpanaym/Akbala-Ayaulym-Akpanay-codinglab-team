<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
    body{
         margin:0;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.footer {
    background: #19191a;
    background-size: cover;
}

.first {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
}

    h4 {
        font-size: 20px;
        letter-spacing: 3px;
        position: relative;
        margin-bottom: 20px;
        font-size: 1.6em;
        color: #fff;
        padding-bottom: 0.5em;
    }
    .first p {
        font-size: 14px;
    }

.second{
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.second2 {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}


.second li {
    list-style: none;
    padding-bottom: 15px;
}

.second a, .second2 a {
    color: rgb(206, 206, 206);
}

    .second a:hover, .second2 a:hover {
        color: #fff;
        transition: 0.2s;
        text-shadow: 1px 1px 20px rgba(0,0,0,1);
        text-decoration: none

    }



.third {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: right;
}





    .third li {
        list-style: none;
        padding-bottom: 15px;
    }


    .third a {
        color: rgb(206, 206, 206);
        text-decoration: none;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 14px;
        transition: 0.2s;
    }


        .third a:hover {
            color: #fff;
            transition: 0.2s;
            text-shadow: 1px 1px 20px rgba(0,0,0,1);
        }


@media screen and (max-width:1000px) {
    .first {
        text-align: center;
    }

        .first h4::after {
            left: 40%;
        }
}

@media screen and (max-width:1000px) {
    .third {
        text-align: center;
    }

        .third h4::after {
            left: 40% !important;
        }
}

.margin {
    margin-left: 20px;
}

.line {
    height:2px;
    background-color:rgb(206,206,206);
    width:100%;
}

.container h1{
    text-align:center;
    margin-top:100px;
    margin-bottom:100px;
}

  .carousel-inner img {
      width: 100%;
      margin: auto;
      min-height:200px;
  }


 .course {
    height: 600px;
    width: 100vw;
    background: black;
    overflow: hidden;
}

img.course {
   object-fit: cover;
   opacity: 0.4;
}
.cour{
  margin-top: 200px;

  }
.panel-heading  {
   color: white;
   background-color: #404040 !important;
}
.advan{
  margin-right: 320px;
    margin-bottom:200px;
}
  </style>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="file:///Users/akbalatleugalieva/Desktop/logo.png">
        <img src="file:///Users/akbalatleugalieva/Desktop/logo.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="tutors.php">Tutors</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div  class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
      <li data-target="#Carousel" data-slide-to="1"></li>
    </ol>

    <div class="container-fluid cour">
      <div class="text-center">
        <a name="Cources">  <h3 class="col-md-12 text-center">Our Cources</h3></a>

      </div>
      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <p style="color:white; ">English</p>
            </div>
            <div class="panel-body">
              <p>
                The aim of the course is to give students a basic critical understanding of the theoretical notions used in these disciplines, as well as of the range and variety of approaches to them. This course gives an introduction to human language, its structure and how it can be described and analysed. The methodology of linguistics (the scientific study of language) is introduced, focusing on the formulation of generalisations that say what all human languages share.
              </p>
              </div>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">Program consists 3 courses</li>
        <li class="list-group-item">Duration of the course: 6 month express</li>
        <li class="list-group-item">Access to course: 1 year</li>
        <li class="list-group-item">Price: $20</li>
      </ul>
            <div class="panel-footer">
           <a href="courseapply.php">APPLY FOR COURSE</a></li>
            </div>
          </div>
        </div>

      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <p style="color:white; ">Math</p>
            </div>
            <div class="panel-body">
              <p>
              Take free online math courses from MIT
              ASU, and other leading math and science
              institutions. Get introductions to algebra,
              geometry, trigonometry, precalculus and calculus
              or get help with current math coursework
              and AP exam preparation. Select a course to learn more. </p>.

              </div>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">Program consists 3 courses</li>
        <li class="list-group-item">Duration of the course: 6 month express</li>
        <li class="list-group-item">Access to course: 1 year</li>
        <li class="list-group-item">Price: $20</li>
      </ul>
            <div class="panel-footer">
           <a href="courseapply.php">APPLY FOR COURSE</a></li>
            </div>
          </div>
        </div>

    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <p style="color:white; ">ICT</p>
            </div>
            <div class="panel-body">
              <p>
              ICT stands for 'Information Communication Technology'. Everyday usage of digital technology includes when you use a computer, tablet or mobile phone, send email, browse the internet, make a video call - these are all examples of using basic ICT skills and technology to communicate.Studying ICT (Computing Science) at third level means you will develop more advanced skills and knowledge. You will deepen your knowledge of technology and how it works. You will learn practical skills like coding/programming and gain a theoretical understanding of topics like computer science and web development.</p>.

              </div>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">Program consists 3 courses</li>
        <li class="list-group-item">Duration of the course: 6 month express</li>
        <li class="list-group-item">Access to course: 1 year</li>
        <li class="list-group-item">Price: $20</li>
      </ul>
            <div class="panel-footer">
           <a href="courseapply.php">APPLY FOR COURSE</a></li>
            </div>
          </div>
        </div>


    <div class="footer">
           <div class="container">
               <div class="row">
                   <div class="col-md-4 col-xs-12">
                       <div class="first">
                           <h4>About Us</h4>
                          <p>We are the center where people can study about marketing secrets and learn about trend professions. We show how to make big money </p>
                       </div>
                   </div>

                   <div class="col-md-4 col-xs-12">
                       <div class="second">
                           <h4> Our Services</h4>
                          <ul class="float">
                                   <li><a href="#">Access to onlain</a></li>
                                   <li><a href="#">Reliable &amp; Identity</a></li>
                                   <li><a href="#">Support of professionals</a></li>
                                   <li><a href="#">Free webinars</a></li>
                                   <li><a href="#">Quality education</a></li>
                               </ul>
                       </div>
                   </div>

                   <div class="col-md-4 col-xs-12">
                       <div class="third">
                           <h4>Follow Us</h4>
                           <ul>
                               <li>Akbala Tleugaliyeva </li>
                                 <li>Akpanay Meterova</li>
                                   <li>Ayaulym Kenzhetayeva</li>
                               <li></li>
                               <li><i class="far fa-envelope"></i>@Learn&Achieve.com</li>

                             <li><i class="fas fa-map-marker-alt"></i> Astana, Kazakhstan </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="line"></div>
                       <div class="second2">
                           <a href="#" target="_blank"> <i class="fa fa-facebook-official fa-2x margin" style="font-size:30px"></i></a>
                           <a href="#" target="_blank"> <i class="fa fa-instagram fa-2x margin" style="font-size:30px"></i></a>
                           <a href="#" target="_blank"> <i class="fa fa-telegram fa-2x margin" style="font-size:30px"></i></a>
                           <a href="#" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>
                       </div>
   <p>&copy; 2021.March All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="https://web.telegram.org/#/im?p=@balaa04" target="_blank">Akbala,Ayaulym & Akpanay</a> Demo Images by <a href="https://www.google.com/" target="_blank">google</a></span></p>
                   </div>
               </div>
               </div>
       </div>

   </body>
   </html>
