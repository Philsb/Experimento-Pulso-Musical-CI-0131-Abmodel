<?php
$servername = "localhost";
$username = "adminPM";
$password = "pulsomusical123!";
$dbname = "pulso_musical";


session_start();
// POST Data
$data['edad'] = $_SESSION['edad'] ;
$data['sexo'] = $_SESSION['sexo'];
$data['genero_pref'] = $_SESSION['genero_pref'];
 
echo json_encode($data);

$edad =  $_SESSION['edad'];
$sexo = $_SESSION['sexo'];
$genero_pref = $_SESSION['genero_pref'];
$experiencia =  $_SESSION['experiencia'];

if(isset($_POST['resultados'])){
 $obj = json_decode($_POST['resultados']);
 //some php operation
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO datosTest (edad, sexo, experiencia, genPreferido, intervP1, intervP2, intervP3, intervP4, timestmpsP1, timestmpsP2, timestmpsP3, timestmpsP4)
        VALUES ($edad ,'$sexo', $experiencia, '$genero_pref', '$obj->p0->intervals', '$obj->p1->intervals', '$obj->p2->intervals', '$obj->p3->intervals', '$obj->p0->timestamps', '$obj->p1->timestamps', '$obj->p2->timestamps', '$obj->p3->timestamps')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


exit;
?>
