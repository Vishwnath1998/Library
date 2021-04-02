<?php
require_once ("userinfo.php");

if(isset($_POST['submit']))
{                                         
$stmt_insert=$conn->prepare("INSERT INTO usertable (user,email,mobile,city,country) VALUES
(:user,:email,:mobile,:city,:country)");//


$executed=$stmt_insert->execute(array(':user'=>$_POST['user'],':email'=>$_POST['email'],
':mobile'=>$_POST['mobile'],':city'=>$_POST['city'],':country'=>$_POST['country']));



}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<!----Header-Section----->
	
	<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Welcome to Book World</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

	<!----Header-Section-one----->
	<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link "  href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#gallery">About-us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" >Any-Help</a>
  </li>
	</ul>
	<!-----middle-section------>
	<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="image/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="image/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-----section------>
<div class="card">
  <div class="card-header">
  <marquee >Time-7Am TO 12Am</marquee>
  </div>
  <div class="card">
    <blockquote class="blockquote mb-0">
      <p>"The only thing that you absolutely have to know, is the location of the library."</p>
      
  </div>
</div>
<!----section--->
<section class="my-5" id="gallery">
	<div class="py-5">
		<h2 class="text-center" style="font-size: 50px"> The library</h2>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-12">
			<img src="image/img4.jpg" class= "aboutimg" >				
			</div>
      <div class=" col-md-6 col-12">
      <h3>Rule Of Library</h3>
      <ul class="list-group">
  <li class="list-group-item">1)Carry your student ID card (or CHOIS Card) with you when you enter the library.</li>
  <li class="list-group-item list-group-item-primary">2)Do not take any book or other library material out of the library without following the borrowing procedures.</li>
  <li class="list-group-item list-group-item-secondary">3)Make sure to return the borrowed items by the due date.</li>
  <li class="list-group-item list-group-item-success">4)Never write in books or cut pages out of them.</li>
  <li class="list-group-item list-group-item-danger">5)Return books/materials to their original location on the bookshelf./li>
  <li class="list-group-item list-group-item-warning">6)Maintaning the Silent</li>
  <li class="list-group-item list-group-item-info">7)Do Not Disturb the Others</li>
  <li class="list-group-item list-group-item-light">8)Mobile is Silent MOde Always</li>
  <li class="list-group-item list-group-item-dark">9)keep Social Distance</li>
</ul>   
    </div>		
		</div>	
	</div>
</div>	
</section>
<!---End Section---->
<!---Middle-Section--->


  <div class="mid">
    <h4 class="text-center">Our Branches</h4>
  </div>
<div class="middle-section">
  <div class="row">
    <div class="col-lg-4 col-m-4 col-12">
      <div class="card" style="width: 18rem; margin-left: 25px">
  <img src="image/img5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Location-Ramala Garden</p>
    <p>City-Chandrapur</p>
  </div>
</div>
    </div>
     <div class="col-lg-4 col-m-4 col-12">
      <div class="card" style="width: 18rem;">
  <img src="image/img6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Location-Nanga Putala </p>
    <p>City-Nagpur</p>

  </div>
</div>
      
    </div>
     <div class="col-lg-4 col-m-4 col-12">
      <div class="card" style="width: 18rem;">
  <img src="image/img6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Location-Gandhi Chowk</p>
    <p>City-Amravati</p>
  </div>
</div>
      
    </div>
  </div>
</div>



<!---End of Middle---->
<!---form---->
<div class="middle-foot">

 <div class="py-5"> 
  <h5 class="text-center">Our gallery</h5> 
  </div>
  <div class="w-50 m-auto">
    <form action="" method="post">
      <div class="form">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
        
      </div>
      
      <div class="form">
        <label>email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">  
      </div>
      <div class="form">
        <label>mob no</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">  
      </div>
      <div class="form">
        <label>city</label>
        <input type="text" name="city" autocomplete="off" class="form-control">  
      </div>
      <div class="form">
        <label>country</label>
        <input type="text" name="country" autocomplete="off" class="form-control">  
      </div>
      <div>
      <input type="submit" value="submit" name="submit">
       </div>
      
      </form>

      </div> 
     

</div>
<!---End-Form---->
<!---footer--->
  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: #cc0066">
    © 2021 Copyright:
    <a class="text-dark" href="#">Library.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!---End-footer-->
<?php
if($executed)
{
 echo "Data inserted succesfully";
} 
else
{
  echo "Data is not inserted";
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>