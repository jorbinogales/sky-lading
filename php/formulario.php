<?php

$errorMSG = "";


if (empty($_POST["nombre"])) {
    $errorMSG = "Nombre es requerido ";
} else {
    $nombre = $_POST["nombre"];
}


if (empty($_POST["email"])) {
    $errorMSG .= "Email es requerido ";
} else {
    $email = $_POST["email"];
}


if (empty($_POST["telefono"])) {
    $errorMSG .= "Teléfono es requerido ";
} else {
    $telefono = $_POST["telefono"];
}

if (empty($_POST["rif"])) {
    $errorMSG .= "Rif es requerido ";
} else {
    $rif = $_POST["rif"];
}

if (empty($_POST["estado"])) {
    $errorMSG .= "Estado es requerido ";
} else {
    $estado = $_POST["estado"];
}

if (empty($_POST["ciudad"])) {
    $errorMSG .= "Ciudad es requerido ";
} else {
    $ciudad = $_POST["ciudad"];
}
if ($estado=="Zulia" || $estado=="Portuguesa" || $estado=="Cojedes" || $estado=="Falcón" || $estado=="Lara" || $estado=="Yaracuy") {

 $zona = 'Centro-occidente';
}
if ($estado=="Barinas" || $estado=="Mérida" || $estado=="Táchira" || $estado=="Trujillo") {

 $zona = 'Andes';
}
if ($estado=="Amazonas" || $estado=="Anzoátegui" || $estado=="Bolívar" || $estado=="Delta Amacuro" || $estado=="Monagas" || $estado=="Nueva Esparta" || $estado=="Sucre") {

 $zona = 'Oriente';
}
if ($estado=="Aragua" || $estado=="Carabobo" || $estado=="Distrito Federal" || $estado=="Guárico" || $estado=="Miranda" || $estado=="Vargas") {

 $zona = 'Centro';
}

if ($zona == "Centro") {
  $Emailpara = "dramirez@keystone.net.ve";
$Subject = "Un nuevo cliente";


$Body = "¡Hola Daniel Ramirez! Un nuevo cliente en tu zona espera tu llamada!";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $estado;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $ciudad;
$Body .= "\n"; 
$Body .= "Zona: ";
$Body .= $zona;
$Body .= "\n";
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 
$success = mail($Emailpara, $Subject, $Body, "From:".$email);
echo 'ok';

}

if ($zona == "Andes") {
  $Emailpara = "jmarin@keystone.net.ve";
$Subject = "Un nuevo cliente";


$Body = "¡Hola José Marín! Un nuevo cliente en tu zona espera tu llamada!";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $estado;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $ciudad;
$Body .= "\n"; 
$Body .= "Zona: ";
$Body .= $zona;
$Body .= "\n"; 
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 
$success = mail($Emailpara, $Subject, $Body, "From:".$email);   
    echo 'ok';
}
if ($zona == "Oriente") {
  $Emailpara = "imercier@keystone.net.ve";
$Subject = "Un nuevo cliente";


$Body = "¡Hola Ingrid Mercier! Un nuevo cliente en tu zona espera tu llamada!";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $estado;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $ciudad;
$Body .= "\n"; 
$Body .= "Zona: ";
$Body .= $zona;
$Body .= "\n"; 
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 
$success = mail($Emailpara, $Subject, $Body, "From:".$email);
echo 'ok';

}
if ($zona == "Centro-occidente") {
  $Emailpara = "jlmarin@keystone.net.ve";
$Subject = "Un nuevo cliente";


$Body = "¡Hola José Leonardo Marín! Un nuevo cliente en tu zona espera tu llamada!";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $estado;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $ciudad;
$Body .= "\n"; 
$Body .= "Zona: ";
$Body .= $zona;
$Body .= "\n"; 
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 
$success = mail($Emailpara, $Subject, $Body, "From:".$email);
echo 'ok';

}

$from ="Sky Lubricantes";
  $Emailcliente = $email;
$Subject = "Hola ".$nombre."! gracias por contactarnos";


$Body = "¡Hola! ".$nombre.",";
$Body .= "\n";
$Body .= "Falta poco para que te conviertas en un aliado comercial de Sky Lubricantes.";
$Body .= "\n";
$Body .= "En los próximos días el Distribuidor de tu zona se comunicará contigo al teléfono de agregaste en el formulario,
para acordar los detalles de tu solicitud.";  
$Body .= "\n";
$Body .= "Para más información entra en nuestra web skylubricantes.com
Si deseas compartir el link para que amigos o aliados se registren, lo puedes hacer aquí skylubricantes.com/landing";

$success = mail($Emailcliente, $Subject, $Body, "From:".$from);   

?>