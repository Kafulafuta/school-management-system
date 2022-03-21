<?php
error_reporting (0);
$host="localhost";
$user="root";
$pass="";
$db="school";
$con=mysqli_connect($host,$user,$pass,$db);
if ($con)
{
	echo "";
}
else
{
	echo "connection failed";
}

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$card_number=$_POST['card_number'];
	$staff_name=$_POST['staff_name'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	
	$sql="INSERT INTO staffmember values('$id','$card_number','$staff_name','$email','$dob','$phone')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "<p align='center' style='color: #00ff00;'>Staff member added successfully</p>";
	}
	else
	{
		echo "<p align='center' style='color: #ff0000;'>Staff member not inserted </p>";
	}
}

?>




<!doctype html>
<html lang="en">
  <head>
    <title>Chilembo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	<style>
	.content-table{
		border-collapse: collapse;
		margin: 25px 0;
		font-size: 0.9em;
		min-width: 400px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	.content-table thead tr{
		background-color: #009879;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}
	.content-table th,
	.content-table td {
		padding: 12px 15px;
	}
	.content-table tbody tr{
		border-bottom: 1px solid #dddddd;
	}
	
	.content-table tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table tbody tr:last-of-type{
		border-bottom:2px solid #009879;
	}
	
	
	</style>
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">Chile University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Front Office</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="admineq.php">Admission Enquiry</a>
                  <a class="dropdown-item" href="visitor.php">Visitor Book</a>
                  <a class="dropdown-item" href="complaint.php">Complaint</a>
                  <a class="dropdown-item" href="phonecall.php">Phone Call Log</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Pannel</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="student.php">Student Details</a>
                  <a class="dropdown-item" href="fees.php">Fees</a>
                  </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Human Resource</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="department.php">Department</a>
                  <a class="dropdown-item" href="staffattend.php">staff Attandance</a>
                  <a class="dropdown-item" href="approveleave.php">Apply Leave</a>
                  <a class="dropdown-item" href="leavetype.php">Leave type</a>
                  <a class="dropdown-item" href="payrol.php">Payroll</a>
				    <a class="dropdown-item" href="designation.php">Designation</a>
                </div>

              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="addbook.php">Add Book</a>
                  <a class="dropdown-item" href="issuereturn.php">Issue Return</a>
                  <a class="dropdown-item" href="addstudent.php">Add Student</a>
                  <a class="dropdown-item" href="staffmember.php">Add Staff Member</a>
                </div>

              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Examination</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="exam.php">Exam List</a>
                  <a class="dropdown-item" href="examschedule.php">Exam Schedule</a>
                  <a class="dropdown-item" href="markregister.php">Marks Register</a>
                  <a class="dropdown-item" href="markgrade.php">Marks Grade</a>
                  
                </div>

              </li>
			  
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hostel</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="hostel.php">Hostel Rooms</a>
                  <a class="dropdown-item" href="roomtype.php">Room Type</a>
                  <a class="dropdown-item" href="hostelroom.php">Hostel Room</a>
                  <a class="dropdown-item" href="addstudent.php">Add Student</a>
                  <a class="dropdown-item" href="staffmember.php">Add Staff Member</a>
                </div>

              </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Downloads</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="upload.php">Upload Content</a>
                  <a class="dropdown-item" href="download.php">Download</a>
                  </div>

              </li>
             
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.html"></a> <a href="register.html"></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    
    <!-- END section -->


    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Add Staff Member</h2>
              <form action="staffmember.php" method="post">
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Memberid</label>
                      <input type="text" name="id" class="form-control py-2">
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="library card">Library Card Number</label>
                      <input type="text" name="card_number" class="form-control py-2 ">
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Staff Name</label>
                      <input type="text" name="staff_name" class="form-control py-2 ">
                    </div>
                  </div>
				   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control py-2 ">
                    </div>
                  </div>
				   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="dob">DOB</label>
                      <input type="date" name="dob" class="form-control py-2 ">
                    </div>
                  </div>
				   
				  
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" class="form-control py-2 ">
                    </div>
                  </div>
				 <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="submit" value="Add" class="btn btn-primary px-5 py-2">
					  
					  
					  
					   				   
					    </div>
                  </div>
                </form>
				  </div>
          </div>
        </div>
      </div>
    </section>
    
				
	<form action="" method="POST">
	<input type="text" name="search" placeholder="search card_number">
	<input type="submit" name="add" value="Search">


  
	<table class="content-table">
	

  <thead>
	<tr>
	    <th>ID</th>
	    <th>CARD NUMBER</th>
		<th>STAFF NAME</th>
		<th>EMAIL</th>
		<th>DOB</th>
		<th>PHONE</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
</thead>

<?php


if(isset($_POST['add']))
{
	$searchkey=$_POST['search'];
	$sql="SELECT * FROM staffmember WHERE card_number LIKE '%$searchkey%' or staff_name LIKE '%$searchkey%'";
}else{

$sql="SELECT * FROM staffmember";
}

$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['card_number']."</td>";
	echo "<td>".$row['staff_name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['dob']."</td>";
	echo "<td>".$row['phone']."</td>";
	
	echo "<td><a href='updatestaffmember.php?id=$row[id]' class='btn btn-success'>Edit</a></td>";
	echo "<td><a href='deletestaffmember.php?id=$row[id]' onclick='return checkdelete()' class='btn btn-danger'>Delete</a></td>";
	
	echo"</tr>";
}



?>


</table>
<script>
function checkdelete()
{
	return confirm('Are You Sure You Want To Delete staff member details???');
}
</script>
</div>
 </div>
 </form>
					  
					  
					  
					  
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading">Create cool website</h2>
            <p>This website was created and designed by chilembo edwin.</p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Enter email">
                <input type="submit" class="btn btn-primary submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3>Chile University</h3>
            
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Pages</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">News</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">203 bishop road, kabulonga, lusaka, zambia</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+260979125938</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">edwinchilembo@yahoo.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Chile can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://chilemboedwin.com" target="_blank" class="text-primary">chilembo</a>
<!-- Link back to chilembo can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>