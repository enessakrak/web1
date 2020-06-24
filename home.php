 <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?> 

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Subvencije - admin page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
   <div class="page-header">
        <h3>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Dobrodošli.</h3>

    </div>
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="http://192.168.104.120/tk/subvencije/home.php">Admin page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
           <a class="nav-link" href="http://192.168.104.120/tk/subvencije/home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
		 <li class="nav-item">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/unos.php">Unos korisnika</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/pregled.php">Pregled korisnika</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/pregledSubvencijaZdravstvo.php">Pregled subvencija zdravstvo</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="#">Subvencije struje</a>
        </li><li class="nav-item">
          <a class="nav-link" href="">Subvencije vode</a>
        </li>
		</li><li class="nav-item">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/unosZdravstvo.php">Unos subvencije zdravstvo</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
			
      </ul>
      
    </div>
  </nav>
</header>
 


 <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
   
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
<center>
<h4>Welcome </h4>
<br/>
 
<img src="image/smiley.png" alt="Smiley face" height="82" width="82">
 
		
	</div>
</main>
		
<footer class="footer mt-auto py-3">
  <div class="container" align="center">
    <span class="text-muted">Program subvencija @ 2019</span>
  </div>
   <a href="reset-password.php" class="btn btn-warning">Resetovanje sifre</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>