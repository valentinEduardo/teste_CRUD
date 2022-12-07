<?php
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];

//echo "$name: $email";

//preparar
$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES(:name, :email)");


//trocar
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);

//executar
$stmt->execute();
echo "Cadastro realizado com sucesso";
?>