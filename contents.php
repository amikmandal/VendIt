<html>
<head><title>Contents of Vending Machine</title></head>
<body>
<h1>Contents of Vending Machine</h1>

<?php
  try {
    // Including connection info (including database password) from outside
    // the public HTML directory means it is not exposed by the web server,
    // so it is safer than putting it directly in php code:
    include("/home/vm_nos3/VendIt/store/dbconnect.php");//this needs to be our DB
    $dbh = dbconnect();
  } catch (PDOException $e) {
    print "Error connecting to the database: " . $e->getMessage() . "<br/>";
    die();
  }
  try {
      $st = $dbh->query('SELECT name FROM Vending_Machine);
      if (($myrow = $st->fetch())) {
  ?>
 /*  <form method="post" action="drinker-info.php">
     Select a drinker below to view more information:<br/>

    <?php
          do {
            // echo produces output HTML:
            echo "<input type='radio' name='drinker' value='" . $myrow['name'] . "'$
            echo $myrow['name'] . "<br/>";
          } while ($myrow = $st->fetch());
          // Below we will see the use of a "short open tag" that is equivalent
          // to echoing the enclosed expression.
    ?>
<?= $st->rowCount() ?> drinker(s) found in the database.<br/>
<input type="submit" value="GO!"/>
</form>
<?php
    } else {
      echo "There is no drinker in the database.";
    }
  } catch (PDOException $e) {
    print "Database error: " . $e->getMessage() . "<br/>";
    die();
  }
?> THIS CAN ALL BE IMPLEMENTED LATER, I.E., "SELECT A PRODUCT AND SEE IT'S NUTRITIONAL INFO"
*/
</body>
</html>
