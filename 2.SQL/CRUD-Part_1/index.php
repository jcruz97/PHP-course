<?php
  $host = 'mysqldb';
  $dbname = 'colyseum';
  $username = 'root';
  $password = 'root';
    
  $db_info = "mysql:host=$host;port=3306;dbname=$dbname"; 
   
  try{

   $bdd = new PDO($db_info, $username, $password);
   
   echo 'Connection acquired with database';
   
  }catch (Exception $e){
    echo $e->getMessage();
  }
?>


<!DOCTYPE html>
<html>
<head>

<title>Colyseum data</title>

<style>
table, th, td {
    border : 1px solid grey;
}

table {
    border-collapse : collapse;
}

th, td {
    width : 250px;
}
</style>

</head>
<body>

<table>
  <tr>
    <th>Lastname</th>
    <th>Firstname</th>
    <th>Birthdate</th>
    <th>Card</th>
    <th>Cardnumber</th>
  </tr>
<?php //Display all clients -> Exercice 1

$clients_table = $bdd->query('SELECT * FROM clients');

while ($row = $clients_table->fetch()){

    echo " <tr>
             <td>".$row['lastName']."</td>
             <td>".$row['firstName']."</td>
             <td>".$row['birthDate']."</td>
             <td>".$row['card']."</td>
             <td>".$row['cardNumber']."</td>             
         </tr>"; 
}

?>

</table>
</br>
</br>
</br>


<?php

$all_type_shows = $bdd->query('SELECT * FROM showTypes');

$shows_string = $all_type_shows -> fetch();

foreach($shows_string as $strings){
    echo $strings;
}


?>


</body>

</html>

