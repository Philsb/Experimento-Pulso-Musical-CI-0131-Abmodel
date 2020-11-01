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
 
//echo json_encode($data);

$edad =  $_SESSION['edad'];
$sexo = $_SESSION['sexo'];
$genero_pref = $_SESSION['genero_pref'];
$experiencia =  $_SESSION['experiencia'];

if(isset($_POST['resultados'])){
 $obj = json_decode($_POST['resultados']);
 //some php operation
}

$disp = $obj->disp;
$intervP0 = $obj->p0->intervals;
$intervP1 = $obj->p1->intervals;
$intervP2 = $obj->p2->intervals;
$intervP3 = $obj->p3->intervals;
$timstpP0 = $obj->p0->timestamps;
$timstpP1 = $obj->p1->timestamps;
$timstpP2 = $obj->p2->timestamps;
$timstpP3 = $obj->p3->timestamps;




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Datos (edad, sexo, experiencia, genPreferido, dispositivo, intervP1, intervP2, intervP3, intervP4, timestmpsP1, timestmpsP2, timestmpsP3, timestmpsP4)
        VALUES ($edad ,'$sexo', $experiencia, '$genero_pref', '$disp' , '$intervP0', '$intervP1', '$intervP2', '$intervP3', '$timstpP0', '$timstpP1', '$timstpP2', '$timstpP3')";

if ($conn->query($sql) === TRUE) {
  echo "Se guardaron los resultados exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


exit;
?>
