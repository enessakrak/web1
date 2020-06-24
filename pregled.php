
<?php
 

	

 
	include("connect1.php"); 	
 
	$link=Connection();
	
	$result=mysql_query(" SELECT `korisniciID`, `korisniciVer`, `tipID`, `naziv`, `JIB`, `sifraDjelatnosti`, `sjediste`, `mjesto`, `kontaktOsoba`, `kontaktTelefon`, `direktor`, `direktorTelefon`, `vlasnik`, `vlasnikPol`, `vlasnikTelefon`, `datumUpisaSud`, `brojRjesenja`, `datumRjesenja`, `brojRadnikaBrcko`, `brojRadnikaVanBrcko`, `ukupnoRadnika`, `maxRadnika`, `datumPrestankaOlaksica`, `status`, `brojRjesenjaPrestanka`, `brojIzmjeneRjesenja`, `datumIzmjeneRjesenja`, `napomena`, `aktivan`, `korisnikID`, `timestamp` FROM `korisnicisubvencija`",$link);
	
	$resultjoin=mysql_query("SELECT * FROM korisnicisubvencija as p left join siftiporganizacije as m ON p.tipID=m.tipID", $link);
	$resultjoin2=mysql_query("SELECT * FROM korisnicisubvencija as p left join sub_zz as m ON p.korisniciID=m.korisniciID", $link);
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
		 <li class="nav-item active">
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
		
			<th>Korisnik ID</th>
			<th>Tip org.</th>
			<th>Naziv</th>
			<th>JIB</th>
			<th>Šifra djelatnosti</th>
			<th>Sjedište</th>
			<!-- <th>Mjesto</th> -->
			<th>Kontakt osoba</th>
			<th>Kontakt telefon</th>
			<!-- <th>Direktor</th> -->
			<!-- <th>Direktor telefon</th> -->
			<th>Vlasnik</th>
			<!-- <th>Pol vlasnika</th> -->
			<th>Vlasnik telefon</th>
			<!-- <th>Datum upisa u sud</th> --> 
			<!-- <th>Broj rješenja</th> -->
			<!-- <th>Datum rješenja</th> -->
			<!-- <th>Broj radnika u Brčkom</th> --> 
			<!-- <th>Broj radnika van Brčkog</th> -->
			<!-- <th>Ukupno radnika</th> -->
			<!-- <th>Maksimalno radnika</th> --> 
			<!-- <th>Datum prestanka olakšica</th> --> 
			<th>Status</th> 
			<!-- <th>Broj rješenja prestanka rješenja</th> --> 
			<!-- <th>Broj izmjene rješenja</th> --> 
			<!-- <th>Datum izmjene rješenja</th> --> 
			<!-- <th>Napomena</th> --> 
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			
		
		</tr>
	</thead>
	<tbody>
	
  	  
	  <?php 
	  
	mysql_set_charset('utf8', $link);
	//  $result=mysql_query("SELECT * FROM `korisnicisubvencija`",$link);
		$resultjoin=mysql_query("SELECT * FROM korisnicisubvencija as p left join siftiporganizacije as m ON p.tipID=m.tipID",$link);
		  if($resultjoin!==FALSE){
		     while($row = mysql_fetch_array($resultjoin)) {
		       
				   
				echo "<tr>";


						echo '<td>' . $row['korisniciID'] . '</td>';
						echo '<td>' . $row['tip'] . '</td>';
						echo '<td>' . $row['naziv'] . '</td>';
						echo '<td>' . $row['JIB'] . '</td>';
						echo '<td>' . $row['sifraDjelatnosti'] . '</td>';
						echo '<td>' . $row['sjediste'] . '</td>';
				//		echo '<td>' . $row['mjesto'] . '</td>';
						echo '<td>' . $row['kontaktOsoba'] . '</td>';
						echo '<td>' . $row['kontaktTelefon'] . '</td>';
				//		echo '<td>' . $row['direktor'] . '</td>';
				//		echo '<td>' . $row['direktorTelefon'] . '</td>';
						echo '<td>' . $row['vlasnik'] . '</td>';
				//		echo '<td>' . $row['vlasnikPol'] . '</td>';
						echo '<td>' . $row['vlasnikTelefon'] . '</td>';
				//		echo '<td>' . $row['datumUpisaSud'] . '</td>';
				//		echo '<td>' . $row['brojRjesenja'] . '</td>';
				//		echo '<td>' . $row['datumRjesenja'] . '</td>';
				//		echo '<td>' . $row['brojRadnikaBrcko'] . '</td>';
				//		echo '<td>' . $row['brojRadnikaVanBrcko'] . '</td>';
				//		echo '<td>' . $row['ukupnoRadnika'] . '</td>';
				//		echo '<td>' . $row['maxRadnika'] . '</td>';
				//		echo '<td>' . $row['datumPrestankaOlaksica'] . '</td>';
						if($row["status"] == 0)								
						echo '<td><font color="red"><b>Neaktivan</b></font color></td>';
						
						if($row["status"] == 1)							
						echo '<td><font color="green"><b>Aktivan</b></font color></td>';
						
				//		echo '<td>' . $row['brojRjesenjaPrestanka'] . '</td>';
				//		echo '<td>' . $row['brojIzmjeneRjesenja'] . '</td>';
				//		echo '<td>' . $row['datumIzmjeneRjesenja'] . '</td>';
				//		echo '<td>' . $row['napomena'] . '</td>';
				
					
						echo '<td><a href = "unosZdravstvo?id='  . $row['korisniciID'] . '">Zdravstvo</a></td>'; 
						echo '<td></td>';
						echo '<td><a href="#?id=' . $row['korisniciID'] . '">Voda</a></td>';
						echo '<td></td>';
						echo '<td><a href="#?id=' . $row['korisniciID'] . '">Struja</a></td>'; 
 
				echo "</tr>";

		     }
		     mysql_free_result($resultjoin);
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