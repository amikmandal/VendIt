<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VendIt!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
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
          $stmt  = $dbh->query('SELECT * FROM Vending-Machine');
          $name = array();
          while ($row = $stmt->fetch())
          {
            array_push($name, $row['id']);
          }

          for($i = 0; $i < count($name); $i++){
            echo '<li><a href = "context.php">', $name[$i] .'</a></li>';
          }
        ?>
  </body>
</html>