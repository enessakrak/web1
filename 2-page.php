<?php
/* [SEARCH FOR USERS] */
if (isset($_POST['search'])) {
  require "3-search.php";
}

/* [DISPLAY HTML] */ ?>
<!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post">
      <h1>
        PRETRAGA PO NAZIVU
      </h1>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form>

    <!-- [SEARCH RESULTS] -->
    <?php
    if (isset($_POST['search'])) {
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s - %s - %s </div>", $r['korisniciID'], $r['naziv'], $r['tip'], $r['ukupnoRadnika'], , $r['JIB']);
        }
      } else {
        echo "No results found";
      }
    }
    ?>
  </body>
</html>