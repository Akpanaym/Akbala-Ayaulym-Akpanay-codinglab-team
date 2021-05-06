
<!DOCTYPE html>
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

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://www.esafety.gov.au/sites/default/files/2020-04/blog-covid-19-child_safety.jpg"style="height:500px" >
       <div class="carousel-caption">
        <h1>
        <p>WELCOME TO THE LEARN & ACHIEVE ACADEMY!</p>
      </h1>
      </div>
      </div>

      <div class="item">
         <img src="https://www.gettingsmart.com/wp-content/uploads/2019/02/8a6f1e04-84ae-462c-98c2-b8ae6e5a1d84_Digital20Learning20Feature20Image-964x580.jpg" style="height:450px" >
      </div>
    </div>


    <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
</div>

<div class="container text-center">
<br>
  <div class="row">
    <div class="col-sm-4">
      <i class='fas fa-award' style='font-size:36px'></i>
      <p><h3>National Awards</h3></p>
    <p>Makes quality education affordable<br>
     for everyone!We offer special online <br>
     applications for a more complete<br>
      understanding of the topic.</p>
    </div>
    <div class="col-sm-4">
      <i class='fas fa-chalkboard-teacher' style='font-size:36px'></i>
       <p><h3>Best Teachers</h3></p>
       <p>Created to support teachers<br>
        in their desire to make class<br>
       activities more interesting
       <br>and effective</p>
    </div>
   <div class="col-sm-4">
    <i class='fas fa-chalkboard' style='font-size:36px'></i>
       <p><h3>Many Courses</h3></p>
       <p>Available always and everywhere. <br>
       You can study at time and place
  <br> most convenient to you.</p>

    </div>
  </div>
</div><br>

 <div class="col-sm-12 course">
          <img src="https://www.cityofbristol.ac.uk/wp-content/uploads/glenn-carstens-peters-npxXWgQ33ZQ-unsplash-1920x1080.jpg"  height="750" class="course" >
  <div class="carousel-caption">
            <h2>Our Advantages</h2>
            <div class="container text-center">
<br>
  <div class="row advan">
    <div class="col-sm-4">
 <i class='far fa-thumbs-up' style='font-size:24px'></i>
Makes quality education affordable for everyone!
<br>
<i class='fas fa-globe-europe' style='font-size:24px'></i>

                            Available always and everywhere. You can study at time and place most convenient to you.
    </div>
    <div class="col-sm-4">
    <i class='fas fa-chalkboard-teacher' style='font-size:24px'></i>

                          Created to support teachers in their desire to make class activities more interesting and effective.
                             <span><i class="icon-video"></i></span>

                            <p>Provides education for kids with special educational needs.</p>
    </div>
   <div class="col-sm-4">


      <span><i class="icon-search"></i></span>

                            <p>More than 10,000 interactive lessons based on the school curriculum.</p>
                            <span><i class="icon-cloud"></i></span>

                            <p>Collected videos on the topic of answers to logical questions, the history of theories.</p>

    </div>
  </div>
</div><br>

          </div>
        </div>

        <hr>
        <div class="container text-center">


<!--
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">Courses</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      <p>1 course</p>
    </div>
    <div class="col-sm-4">
      <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      <p>2 course</p>
    </div>
    <div class="col-sm-4">

      <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    <p>3 course</p>
    </div>
  </div>
</div>
-->
<div class="container-fluid cour">
  <div class="text-center">
    <h3 class="margin" >Courses</h3>
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
          <p><strong></strong></p>
        </div>
        <div class="panel-footer">
          <h3>English Teacher</h3>
          <h3>$20</h3>
       <a href="courseapply.php">APPLY FOR COURSE</a></li>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <p style="color:white; ">Math</p>
        </div>
        <div class="panel-body">
         <p>Take free online math courses from MIT</p>
          <p>
          ASU, and other leading math and science </p>
          <p>
          institutions. Get introductions to algebra,</p>
          <p>geometry, trigonometry, precalculus and calculus</p>
          <p> or get help with current math coursework </p>
          <p>and AP exam preparation. Select a course to learn more. </p>
            <p><strong></strong></p>
        </div>
        <div class="panel-footer">
          <h3>Leonhard Euler</h3>
          <h3>$19</h3>
       <a href="courseapply.php">APPLY FOR COURSE</a></li>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        <p style="color:white; ">1 course</p>
        </div>
        <div class="panel-body">
          <p> </p>
        </div>
        <div class="panel-footer">
          <h3></h3>
          <h4></h4>
      <a href="courseapply.php">APPLY FOR COURSE</a></li>
        </div>
      </div>
    </div>
  </div>
</div>


<div class=" col-sm-12 teach" >
  <h3 class="margin">Our Teachers</h3>
  <p>Text about teachers</p>

      <div class="row">
        <div class="col-sm-3">
           <img src="">
        </div>
        <div class="col-sm-3">
          <h3>nnnn</h3>
          <p><bold>  TEACHER</p>
          <i class="fa fa-facebook" style="font-size:24px"></i>
          <i class="fa fa-twitter" style="font-size:24px"></i>
          <i class="fa fa-whatsapp" style="font-size:24px"></i>
          <i class="fa fa-instagram" style="font-size:24px"></i>
        </div>
              </div>
</div>
      <div class="row">
        <div class="col-sm-3">
           <img src="">
        </div>
        <div class="col-sm-3">
          <h3>name</h3>
          <p><bold>  TEACHER</p>

          <i class="fa fa-facebook" style="font-size:24px"></i>
          <i class="fa fa-twitter" style="font-size:24px"></i>
          <i class="fa fa-whatsapp" style="font-size:24px"></i>
          <i class="fa fa-instagram" style="font-size:24px"></i>
        </div>
</div>
</div>


<div class="counter">
<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
<h2 class="statika"><a name="Aboutus"><font color="green" face="Times New Roman"><center>Statistics</font></h2></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="employees">
                    <p class="counter-count">2017</p>
                    <p class="employee-p">Opened in</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count">3</p>
                    <p class="customer-p">Cources</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="design">
                    <p class="counter-count">27</p>
                    <p class="design-p">Spikers</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="order">
                    <p class="counter-count">652</p>
                    <p class="order-p">Downloaded application</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--

<footer class="container-fluid bg-grey py-5">
 <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                            <h3>About Us</h3>
                            <p>We are the center where people can study about marketing secrets and learn about trend professions. We show how to make big money </p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                            <h3>Our Services</h3>
                            <ul class="float">
                                <li><a href="#">Access to onlain</a></li>
                                <li><a href="#">Reliable &amp; Identity</a></li>
                                <li><a href="#">Efficient design</a></li>
                                <li><a href="#">Support of professionals</a></li>
                            </ul>
                            <ul class="float">
                                <li><a href="#">Free webinars</a></li>
                                <li><a href="#">Quality education</a></li>
                                <li><a href="#">Available always and everywhere. &amp; CSS3 Template</a></li>
                                <li><a href="#">Created application</a></li>
                            </ul>

                        </div>

                        <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                      <a name="additional">      <h3>Follow Us</h3></a>
                            <ul class="fh5co-social">
                                <li><a href="https://instagram.com/akbalatleugali?igshid=165rd7lmho16r"><p><img src="img/inslogo.png" width="15" height="15">   Instagram</a></li>
                                <li><a href="https://www.facebook.com/easy.math.54"><p><img src="img/fblogo.png" width="15" height="15">  Facebook</a></li>
                                <li><a href="https://youtu.be/FqeM0QaeeSc"><p><img src="img/youtlogo.png" width="15" height="15">   Youtube</a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><p><img src="img/gmalogo.png" width="15" height="15"> Gmail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="fh5co-copyright text-center py-5">
                    <p>&copy; 2021.March All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="https://web.telegram.org/#/im?p=@balaa04" target="_blank">Akbala & Akpanay</a> Demo Images by <a href="https://www.google.com/" target="_blank">google</a></span></p>
                </div>
            </div>
</footer>
-->
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




</body>
</html>
