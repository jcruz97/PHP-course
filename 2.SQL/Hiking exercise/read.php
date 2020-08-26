<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <?php
      
      require 'connect.php';

      $sql = 'SELECT * FROM hiking;';

      $request = $bdd ->query($sql);

      while($row = $request->fetch()) {
        
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['difficulty'] . "</td>";
        echo "<td>" . $row['distance'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td>" . $row['height_difference'] . "</td>";
        echo "</tr>";

      }
      
      ?>
    </table>
  </body>
</html>
