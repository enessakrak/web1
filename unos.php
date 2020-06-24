<?php 
include('conn.php');

	
?>

<?php
   include('session.php');
?>
 
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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
        
		 <li class="nav-item active">
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
       <form class="form-inline mt-2 mt-md-0">
        <a class="nav-link" href="http://192.168.104.120/tk/subvencije/4-ajax-search.html?">Pretraga</a>
       
      </form>
    </div>
  </nav>
</header>

 <main role="main" class="flex-shrink-0">
  <div class="container" align="center">
   
 <br/>
  <br/>
<br/>
  <br/>
      <h4>Welcome <?php echo $login_session; ?></h4> 
     
 <script>
 function validateForm() {
  var x = document.forms["unos"]["JIB"].value;
   var y = document.forms["unos"]["datumUpisaSud"].value;
   var z = document.forms["unos"]["datumRjesenja"].value;
  if (x == "") {
    alert("JIB se mora unijeti");
    return false;
  } 
 
   if (y == "") {
    alert("Datum upisa u sud se mora unijeti");
    return false;
  }
   if (z == "") {
    alert("Datum rjesenja se mora unijeti");
    return false;
  }
}
</script>

<br/>
 <center>
  <form method="post" action="djelatnost2.php" onsubmit="return validateForm()"  name="unos" >

 <table class="table table-bordered table-striped" >   

 
		<tr> 
			 <td>Korisnik ID: </td> 
			<td><input style="width:auto;" type="text"  name="korisniciID" size="80"  /></td>   
		
		<tr> 
			<td>Tip ID: </td> 
			<td><input style="width:auto;" type="text"  name="tipID" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Naziv: </td> 
			<td><input style="width:auto;" type="text"  name="naziv" size="80" /></td>  
		</tr> 
		<tr> 
			<td>JIB: </td> 
			<td><input style="width:auto;" type="number_format" maxlength="13" name="JIB" size="20" onkeypress="javascript:return isNumber(event)" >
		
		<font color="red"><b>Unijeti možete samo brojeve dužine 13 karaktera </b> </font>
			</td>  
		</tr> 
		<tr> 
			<td>Šifra djelatnosti: </td> 
			<td><input style="width:auto;" type="text"  name="sifraDjelatnosti" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Sjedište: </td> 
			<td><input style="width:auto;" type="text"  name="sjediste" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Mjesto: </td> 
			<td><input style="width:auto;" type="text"  name="mjesto" size="80" /></td>  
		</tr>
		<tr> 
			<td>Kontakt osoba: </td> 
			<td><input style="width:auto;" type="text"  name="kontaktOsoba" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Kontakt telefon: </td> 
			<td><input style="width:auto;" type="text"  name="kontaktTelefon" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Direktor: </td> 
			<td><input style="width:auto;" type="text"  name="direktor" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Direktor telefon: </td> 
			<td><input style="width:auto;" type="text"  name="direktorTelefon" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Vlasnik: </td> 
			<td><input style="width:auto;" type="text"  name="vlasnik" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Pol vlasnika: </td> 
			<td><input style="width:auto;" type="text"  name="vlasnikPol" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Vlasnik telefon: </td> 
			<td><input style="width:auto;" type="text"  name="vlasnikTelefon" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Datum upisa u sud: </td> 
			<td><input style="width:auto;" type="date"  name="datumUpisaSud" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj rješenja: </td> 
			<td><input style="width:auto;" type="text"  name="brojRjesenja" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Datum rješenja: </td> 
			<td><input style="width:auto;" type="date"  name="datumRjesenja" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj radnika u Brčkom: </td> 
			<td><input style="width:auto;" type="text"  name="brojRadnikaBrcko" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj radnika van Brčkog: </td> 
			<td><input style="width:auto;" type="text"  name="brojRadnikaVanBrcko" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Ukupno radnika: </td> 
			<td><input style="width:auto;" type="text"  name="ukupnoRadnika" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Maksimalno radnika: </td> 
			<td><input style="width:auto;" type="text"  name="maxRadnika" size="80" /></td>  
		</tr> 		
		<tr> 
			<td>Datum prestanka olakšica: </td> 
			<td><input style="width:auto;" type="date"  name="datumPrestankaOlaksica" size="80" /></td>  
		</tr>
		<tr> 
			<td>Status: </td> 
			<td><input style="width:auto;" type="text"  name="status" size="80" /></td>  
		</tr>	
		<tr> 
			<td>Broj rješenja prestanka rješenja: </td> 
			<td><input style="width:auto;" type="text"  name="brojRjesenjaPrestanka" size="80" /></td>  
		</tr>
		<tr> 
			<td>Broj izmjene rješenja: </td> 
			<td><input style="width:auto;" type="text"  name="brojIzmjeneRjesenja" size="80" /></td>  
		</tr>	
		<tr> 
			<td>Datum izmjene rješenja: </td> 
			<td><input style="width:auto;" type="date"  name="datumIzmjeneRjesenja" size="80" /></td>  
		</tr>
		<tr> 
			<td>Napomena: </td> 
			<td><input style="width:auto;" type="text"  name="napomena" size="80" /></td>  
		</tr>	
			 
	<p>
		<td align="center" colspan="3"><input type="submit" class="btn btn-primary" value="Snimi novog korisnika" /></td> 
    </p>
	<script>
   
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
			
            return false;
		

        return true;
    }    
</script>

</form>
   </table>
	
	 </center>
	
  
 <h4><a href = "logout.php">Sign Out</a></h4>
  </br>
   <footer class="footer mt-auto py-3">
  <div class="container" align="center">
    <span class="text-muted">Program subvencija @ 2019</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
