<?php
include "conn.php";


//preparar
$stmt = $conn->prepare("SELECT * FROM users ORDER BY id");

//executar

$stmt->execute();

//buscar
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

//var_dump($result);

foreach ($result as $row) {
  //var_dump($row);
  foreach($row as $key => $value){
    echo $key." - ".$value. "<br>";
  }

  echo"--------------- <br>";
}