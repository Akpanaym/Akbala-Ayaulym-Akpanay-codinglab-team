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
      background-image: url('https://www.cityofbristol.ac.uk/wp-content/uploads/glenn-carstens-peters-npxXWgQ33ZQ-unsplash-1920x1080.jpg ');
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
        <a name="Cources">  <h3 class="col-md-12 text-center">Our Tutors</h3></a>


      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <p style="color:white; ">Math</p>
            </div>
            <div class="panel-body">
              <img src="math.jpg" alt="">

              </div>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">Education
          <br>
          In 2016, she graduated from the Institute of Geology and Oil and Gas Affairs at the KazNTU named after K. I. Satpayev.
In 2011, she graduated from the Mathematical and Economic Lyceum (Astana), scored 120 points at the UNT (profile, physics).

        </li>
        <li class="list-group-item">Qualifications:
<br>
Tutor since 2012.
</li>
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
                <img src="math2.jpg" alt="">

                </div>
            <ul class="list-group list-group-flush">
          <li class="list-group-item">Education
            <br>
            Lomonosov Moscow State University, Faculty of Mechanics and Mathematics, Specialist in Mathematics, 2006-2011
Experience:
• From 2011 to 2016, he taught at the KTL of Almaty, Karaganda, the school named after him. Nurmakova.

          </li>
          <li class="list-group-item">Qualifications:
  <br>
  Tutor since 2007 — 12 years.

  </li>
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
                  <img src="math3.jpg" alt="">

                  </div>
              <ul class="list-group list-group-flush">
            <li class="list-group-item">Education
              <br>
              Tutor in physics and mathematics.
3rd year student of the Faculty of Physics and Technology of al-Farabi Kazakh National University, specialty-scientific physics.
Winner of the regional subject Olympiad in Physics (2011, 2012).

            </li>
            <li class="list-group-item">Qualifications:
    <br>
  He has been tutoring since 2013.

    </li>
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
                    <p style="color:white; ">English</p>
                  </div>
                  <div class="panel-body">
                    <img src="eng.jpg" alt="">
          </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
      Kazakh State Women's Pedagogical University, Faculty of Two Foreign Languages, specialty-teacher of English and German, specialty, 2007
  * Kazakh State Women's Pedagogical Institute, qualification-teacher of a foreign language (English and German), 2003-2007.

      </li>
      <li class="list-group-item">Qualifications:
      <br>
      Tutoring activity — 14 years.
  Taught at a language school, 2011-2015.
  IELTS 6.0. (2016)
  English teacher at the school (since 2016)

      </li>
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
              <p style="color:white; ">English</p>
            </div>
            <div class="panel-body">
              <img src="eng2.jpg" alt="">
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
      Karaganda State University named after E. A. Buketov, Faculty of Foreign Languages, specialty-teacher of French and English, 2001
  * Oxford university press Nur-Sultan, advanced training, course — Teaching and learning offline & online, 2016-2020

      </li>
      <li class="list-group-item">Qualifications:
      <br>
      Teaching experience: teacher of English and French in a language center and a commercial company (from 2014 -2018).
  Experience as a translator


      </li>
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
              <p style="color:white; ">English</p>
            </div>
            <div class="panel-body">
              <img src="eng3.jpg" alt="">
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
      Kazakhstan Multidisciplinary Institute "Parasat", Faculty of Translation Studies, specialty-translation studies, 2008
  * St. Petersburg State University of Economics, Faculty of Media Industry, specialty-Public Relations,course — Teaching and learning offline & online, 2013


      </li>
      <li class="list-group-item">Qualifications:
      <br>
    IELTS Certificate (academic 7.0), 2020
  Experience as a translator of English and French in a language center and a commercial company


      </li>
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
              <img src="ICT.jpg" alt="">
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
      International University of Information Technology 2012-2014
S. Seifullin Kazakh Agrotechnical University, Faculty of Computer Systems and Professional Education, specialty-Computer Engineering and Software, 2014-2018

      </li>
      <li class="list-group-item">Qualifications:
      <br>
      more than 10 years
    Winner of prizes in various international and national Olympiads.

      </li>
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
              <img src="ICT2.jpg" alt="">
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
    He graduated from the physical-mat school for gifted children "Daryn" in Karaganda and  graduated from Suleiman Demirel University with a degree in Information Systems.
      </li>
      <li class="list-group-item">Qualifications:
      <br>
      2012-2015-teacher at the language center.
  Tutoring experience-since 2010.

      </li>
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
              <img src="ICT3.jpg" alt="">
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Education
      <br>
      D. Serikbayev EKSTU, Faculty of Information Technologies and Energy, specialty-Information systems, Master's degree, 2003
* D. Serikbayev EKSTU, Faculty of Information Technologies and Energy, specialty-Information systems, PhD, 2019


      </li>
      <li class="list-group-item">Qualifications:
      <br>
      Experience of tutoring — 4 years.
  * Works as a software engineer.
  * Teaching experience – six months (replaced a teacher at school, 2013).Winner of the Republican Olympiad in Physics (3rd place in 2014)


      </li>
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
