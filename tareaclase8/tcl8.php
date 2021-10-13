<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container-fluid">
		<main>
<?php

$registro = array();

$datosP1 = array();
$datosP1["Nombre"] = "Aurora";
$datosP1["Apellido"] = "Martinez";
$datosP1["Edad"] = "32";
$datosP1["Email"] = "aurora.martinez@gmail.com";
$datosP1["DNI"] = "92.263.990";

$datosP2 = array();
$datosP2["Nombre"] = "Maria";
$datosP2["Apellido"] = "Villareal";
$datosP2["Edad"] = "21";
$datosP2["Email"] = "maria3123@hotmail.com";
$datosP2["DNI"] = "34.076.124";

$datosP3 = array();
$datosP3["Nombre"] = "Rodolfo oscar";
$datosP3["Apellido"] = "Acosta";
$datosP3["Edad"] = "55";
$datosP3["Email"] = "oscar.acosta@gmail.com";
$datosP3["DNI"] = "30.635.162";

$datosP4 = array();
$datosP4["Nombre"] = "Evelin";
$datosP4["Apellido"] = "Gonzales";
$datosP4["Edad"] = "36";
$datosP4["Email"] = "gonzalesevelin@gmail.com";
$datosP4["DNI"] = "22.533.110";

$datosP5 = array();
$datosP5["Nombre"] = "Roberto";
$datosP5["Apellido"] = "Hernandes";
$datosP5["Edad"] = "21";
$datosP5["Email"] = "Hernandes11@hotmail.com";
$datosP5["DNI"] = "93.001.692";

$registro[0] = $datosP1;
$registro[1] = $datosP2;
$registro[2] = $datosP3;
$registro[3] = $datosP4;
$registro[4] = $datosP5;

for ($i = 0; $i < count($registro); $i++) {
    echo "<div class=\"row card-body\">";
    echo "<div class=\"card\">";
    echo "<div class=\"card-header\">Nombre: ".$registro[$i]["Nombre"]." ". $registro[$i]["Apellido"]."</div>";
    echo "<div class=\"card-header\">Edad: ".$registro[$i]["Edad"]." "."<br></div></div>";
    echo "<div class=\"card-header\">Email: ".$registro[$i]["Email"]." "."<br></div></div>";
    echo "<div class=\"card-header\">DNI: ".$registro[$i]["DNI"]." "."<br></div></div>";
}
?>
        </main>
        <footer>

        </footer>
	</div>
</body>

</html>