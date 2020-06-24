<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">

window.onload = function () {
	var myTable = document.getElementById("insertHere");
	var elm = document.createElement('tr');
	inputStr='<td>Naziv</td><td>Tip organizacije</td><td>Ukupan broj radnika</td><td>JIB</td>';
	/* var i=0;
	var j=0;
	while (i<inputStr.lastIndexOf("<")) {
		j=inputStr.indexOf("<td>",j)+1;
		i=inputStr.indexOf("<",j);
		var txtElm = document.createTextNode(inputStr.substring(j+3,i));
		var tdElm = document.createElement("td");
		tdElm.appendChild(txtElm);
		elm.appendChild(tdElm);
	}	 */
	 var results = JSON.parse(this.response),
            wrapper = document.getElementById("results");
            wrapper.innerHTML = "";
            if (results.length > 0) {
              for(var res of results) {
				
                var line = document.createElement("div");
				
                line.innerHTML = res['naziv'] + " --- " + res['tip'] + " --- " + res['ukupnoRadnika'] + " --- " + res['JIB'];
                wrapper.appendChild(elm);
				
              }
            } else {
              wrapper.innerHTML = "Nije pronađen nijedan takav zapis u bazi podataka";
            }
	
	myTable.appendChild(elm);
}
 function fetch() {
        // GET SEARCH TERM
        var data = new FormData();
        data.append('search', document.getElementById("search").value);
        data.append('ajax', 1);

        // AJAX
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "3-search.php", true);
        xhr.onload = function () {
          if (xhr.status==403 || xhr.status==404) {
            alert("ERROR LOADING FILE!");
          } else {
			
            var results = JSON.parse(this.response),
            wrapper = document.getElementById("results");
            wrapper.innerHTML = "";
            if (results.length > 0) {
              for(var res of results) {
				
                var line = document.createElement("div");
				
                line.innerHTML = res['naziv'] + " --- " + res['tip'] + " --- " + res['ukupnoRadnika'] + " --- " + res['JIB'];
                wrapper.appendChild(line);
				
              }
            } else {
              wrapper.innerHTML = "Nije pronađen nijedan takav zapis u bazi podataka";
            }
          }
        };
        xhr.send(data);
        return false;
      }
</script>
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

   
  <body>
    <!-- [SEARCH FORM] -->
    <form onsubmit="return fetch();">
      <h3>
       Pretraga po nazivu, tipu organizacije, ukupnom broju radnika i JIB
      </h3>
	  <br/>
	  <br/>
      <input type="text" id="search" required/>
      <input type="submit" value="Trazi"/>
	  <!-- <table class="table table-bordered  table-striped">
		<thead>
			<tr>
				<td>
					Naziv
				</td>
				<td>
					Tip organizacije
				</td>
				<td>
					Ukupan broj radnika
				</td>
				<td>
					JIB
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>


						<td></td>;
						<td></td>;
						<td></td>;
						<td></td>;
			</tr>
	 </tbody>
	  </table> -->
    </form>
	
	  <br/>
	
    <!-- [SEARCH RESULTS] -->
    <div id="results"></div>
  </body>
  <footer class="footer mt-auto py-3">
  <div class="container" align="center">
    <span class="text-muted">Program subvencija @ 2019</span>
  </div>
      <br/>
	  <br/>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
</html>