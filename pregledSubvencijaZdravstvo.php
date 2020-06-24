
<?php
 
	include("connect1.php"); 	
 
	$link=Connection();
	
	$result=mysql_query("SELECT * FROM `sub_zz` ",$link);
	
	//$resultjoin=mysql_query("SELECT * FROM korisnicisubvencija as p left join siftiporganizacije as m ON p.tipID=m.tipID", $link);
	
?>
 
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	<header('Content-Type: text/html; charset=utf-8');>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="http://192.168.104.120/tk/subvencije/home.php">Admin page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item">
           <a class="nav-link" href="http://192.168.104.120/tk/subvencije/home.php">Home</a>
        </li>
        
		 <li class="nav-item">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/unos.php">Unos korisnika</a>
        </li>
		 <li class="nav-item ">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/pregled.php">Pregled korisnika</a>
        </li>
		 <li class="nav-item active">
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
      </ul>
       <form class="form-inline mt-2 mt-md-0">
        <a class="nav-link" href="http://192.168.104.120/tk/subvencije/4-ajax-search.html?">Pretraga</a>
       
      </form>
    </div>
  </nav>
</header>

 
  <div class="container-fluid" align="center">
   
 <br/>
  <br/>



<br/>
 <center>
 
 
 <table class="table table-bordered  table-striped" >   

 
	<thead>
		<tr>
		
			<th>ID subvencije:</th>
			<th>ID korisnika:</th>
			<th>Broj predmeta:</th>
			<th>Status:</th>
			<th>Broj akta:</th>
			<th>Datum:</th>
			<th>Period od:</th>
			<th>Period do:</th>
			<th>Iznos doprinosa za zaposlenje:</th>
			<th>Iznos doprinosa za zdravstvo:</th> 
			<th>Ukupni iznos:</th> 
			<th>Datum naloga:</th>
			<th>Broj zahtjeva:</th> 
			<th>Broj naloga:</th>
			<th>Iznos naloga:</th>  
			<th>Svrha:</th> 
			<th>Dostavljen izvještaj:</th> 
		
		</tr>
	</thead>
	<tbody>
  	  
	  <?php 
	  
	mysql_set_charset('utf8', $link);
	  $result=mysql_query("SELECT * FROM `sub_zz` ",$link);
		
		  if($result!==FALSE){
		     while($row = mysql_fetch_array($result)) {
					echo "<tr>";
						echo '<td>' . $row['subID'] . '</td>';
						echo '<td>' . $row['korisniciID'] . '</td>';
						echo '<td>' . $row['brojPredmeta'] . '</td>';
					//	echo '<td>' . $row['status'] . '</td>';
						if($row["status"] == 0)								
						echo '<td><font color="red"><b>Neaktivan</b></font color></td>';
						
						if($row["status"] == 1)							
						echo '<td><font color="green"><b>Aktivan</b></font color></td>';
						echo '<td>' . $row['brojAkta'] . '</td>';
						echo '<td>' . $row['datum'] . '</td>';
						echo '<td>' . $row['periodOd'] . '</td>';
						echo '<td>' . $row['periodDo'] . '</td>';
						echo '<td>' . $row['iznosDoprZap'] . '</td>';
						echo '<td>' . $row['iznosDoprZdr'] . '</td>';
						echo '<td>' . $row['iznosUkupno'] . '</td>';
						echo '<td>' . $row['datumNaloga'] . '</td>';
						echo '<td>' . $row['brojZahtjeva'] . '</td>';
						echo '<td>' . $row['brojNaloga'] . '</td>';
						echo '<td>' . $row['iznosNaloga'] . '</td>';
						echo '<td>' . $row['svrha'] . '</td>';
						//echo '<td>' . $row['dostavljenIzvjestaj'] . '</td>';
						
						if($row["dostavljenIzvjestaj"] == 0)								
						echo '<td><font color="red"><b>Nije</b></font color></td>';
						
						if($row["dostavljenIzvjestaj"] == 1)							
						echo '<td><font color="green"><b>Jeste</b></font color></td>';
					
						
						
				//		echo '<td>' . $row['brojRjesenjaPrestanka'] . '</td>';
				//		echo '<td>' . $row['brojIzmjeneRjesenja'] . '</td>';
				//		echo '<td>' . $row['datumIzmjeneRjesenja'] . '</td>';
				//		echo '<td>' . $row['napomena'] . '</td>';
				
					
				//		echo '<td><a href = "#?id='  . $row['korisniciID'] . '">Zdravstvo</a></td>'; 
				//		echo '<td></td>';
				//		echo '<td><a href="#?id=' . $row['korisniciID'] . '">Voda</a></td>';
				//		echo '<td></td>';
				//		echo '<td><a href="#?id=' . $row['korisniciID'] . '">Struja</a></td>'; 
 
				echo "</tr>";

		     }
		     mysql_free_result($result);
		     mysql_close();
		  }
      ?>
	
	
</tbody>
   </table>
  
  </br>
   <footer class="footer mt-auto py-3">
  <div class="container" align="center">
    <span class="text-muted">Program subvencija @ 2019</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</div>
</html>