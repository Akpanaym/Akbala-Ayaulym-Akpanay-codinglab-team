<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body{


    background-image: url('  https://images.unsplash.com/photo-1452882628481-6a2da9481239?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80 ');

  }
  .contact{
    padding: 4%;
    height: 400px;
  }
  .col-md-3{
    background:   #7070db;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }
  .contact-info{
    margin-top:10%;
    height: 285px;
  }
  .contact-info img{
    margin-bottom: 15%;
  }
  .contact-info h2{
    margin-bottom: 10%;
  }
  .col-md-9{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }
  .contact-form label{
    font-weight:600;
  }
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
        <li class="active"><a href="index.php">Home</a></li>
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
<div class="container contact">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        <h2>Application</h2>
        <h4>Send a request to participate in the course</h4>
      </div>
    </div>
    <div class="col-md-9">
      <div class="contact-form">
       <form method="POST">
            Course Name:<input type="text" placeholder="Course name..." class="form-control text-center" name="course">
             First Name: <input type="text" placeholder="Your firstname..." class="form-control  text-center" name="fname">
            Last Name: <input type="text" placeholder="Your lastname..." class="form-control text-center" name="lname">
             Phone number<input type="text" placeholder="Phone number..." class="form-control  text-center" name="phone">
             Email Address:<input type="text" placeholder="Email address..." class="form-control  text-center" name="email">
             <br>
            <input type="submit"  value="Apply" name ="sb" class="btn btn-primary btn-block"/></td>
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['sb'])){
    include "dbclass.php";
    $course=$_POST['course'];
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $phone=$_POST['phone'];
      $email=$_POST['email'];
      $obj=new Database();

$obj->saveRecords2($course,$fname,$lname,$phone,$email);  // it is a function to save the data from the form
}
?>
