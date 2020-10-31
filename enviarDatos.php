<?php
$servername = "localhost";
$username = "adminPM";
$password = "pulsomusical123!";
$dbname = "Prueba";


session_start();
// POST Data
$data['edad'] = $_SESSION['edad'] ;
$data['sexo'] = $_SESSION['sexo'];
$data['genero_pref'] = $_SESSION['genero_pref'];
 
echo json_encode($data);

$edad =  $_SESSION['edad'] ;
$sexo = $_SESSION['sexo'];
$genero_pref = $_SESSION['genero_pref'];
$experiencia =  $_SESSION['experiencia'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO datosTest (edad, sexo, experiencia, genero_pref, resultados)
        VALUES ($edad ,'$sexo', $experiencia, '$genero_pref', '123123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


exit;
?>
