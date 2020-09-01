<?php
  $host = 'mysqldb';
  $dbname = 'weatherapp';
  $username = 'root';
  $password = 'root';
    
  $db_info = "mysql:host=$host;port=3306;dbname=$dbname"; 
   
  try{

   $bdd = new PDO($db_info, $username, $password);
   $data = $bdd->query('SELECT * FROM meteo');
   echo 'Connection acquired with database';
   
  }catch (Exception $e){
    echo $e->getMessage();
  }
?>


<!DOCTYPE html>
<html>
<head>MySQL PDO</head>

<body>

 <h1>WeatherApp Belgium</h1>
 <table>
    <tr>
       <th>Ville</th>
       <th>Maxima</th>
       <th>Minima</th>
    </tr>
    <?php
    
      while ($row = $data->fetch()) {
        $id = $row['id'];
        echo "<tr id='tr $id '>";
        echo "<td>" . $row['ville'] . "</td>";
        echo "<td>" . $row['haut'] . "</td>";
        echo "<td>" . $row['bas'] . "</td>";
        echo '<td><input type="checkbox" name="delete[]" value=$id></td>';
        echo "</tr>";
      }
      

      $data ->closeCursor();
    ?>
 </table></br>

 </br>
 </br>
 </br>


 <form action="" method="POST">
   <input type="text" name="town" placeholder="Please insert the town" ></br>

   <label for="highT">Please put highest temperature</label>
   <input type="number" name="highT" min="5" max="45" ></br>

   <label for="lowT">Please put lowest temperature</label>
   <input type="number" name="lowT" min="-20" max="20" ></br>

   <input type="submit" value="submit">
   <input type="submit" name="deleteBtn" value="Delete selected row(s)">
 </form>

</body>
</html>

<?php

$town = $_POST['ville'];
$high_temp = $_POST['haut'];
$low_temp= $_POST['bas'];

if(isset($town, $high_temp, $low_temp)){
$sql = "INSERT INTO meteo (ville, haut, bas) VALUES (?, ?, ?)";
$stmt = $bdd->prepare($sql);
$stmt->execute([$town, $high_temp, $low_temp]);
header("Refresh:0");
}

?>

<?php

$delete_btn = $_POST['deleteBtn'];
$delete_cb = $_POST['delete[]'];

if(isset($delete_btn)){

  if(isset($delete_cb)){
    $deleteUser = "DELETE from meteo WHERE id=".$row['id'];
    $deleting = $bdd->execute($deleteUser);

    header("Refresh:0");
  }
} 
?>