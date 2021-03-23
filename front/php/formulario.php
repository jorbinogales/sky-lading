<?php
 
    

if(isset($_POST['email'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $rif = $_POST['rif'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    

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
  $to      = 'dramirez@keystone.net.ve';
$subject = "Un nuevo cliente";
$headers = "From: ".$nombre." <".$email.">\r\n"; $headers = "Reply-To: ".$email."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();

$Body = "¡Hola Daniel Ramirez! Un nuevo cliente en tu zona espera tu llamada!<br>";
$Body .= "Nombre:<br> ";
$Body .= $nombre."<br>";
$Body .= "Email: <br>";
$Body .= $email."<br>";
$Body .= "Teléfono:<br>";
$Body .= $telefono."<br>";
$Body .= "Estado: <br>";
$Body .= $estado."<br>";
$Body .= "Ciudad: <br>";
$Body .= $ciudad."<br>";
$Body .= "Zona: <br>";
$Body .= $zona."<br>";
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 

$enviado = mail($to, $subject, $Body, $headers);

if($enviado){
echo json_encode(['success'=>true]); }
else{ echo json_encode(['success'=>false]);}
    

}


if ($zona == "Oriente") {
  $to      = 'imercier@keystone.net.ve';
$subject = "Un nuevo cliente";
$headers = "From: ".$nombre." <".$email.">\r\n"; $headers = "Reply-To: ".$email."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();

$Body = "¡Hola Ingrid Mercier! Un nuevo cliente en tu zona espera tu llamada!<br /><br>";
$Body .= "Nombre:<br> ";
$Body .= $nombre."<br>";
$Body .= "Email: <br>";
$Body .= $email."<br>";
$Body .= "Teléfono:<br>";
$Body .= $telefono."<br>";
$Body .= "Estado: <br>";
$Body .= $estado."<br>";
$Body .= "Ciudad: <br>";
$Body .= $ciudad."<br>";
$Body .= "Zona: <br>";
$Body .= $zona."<br>";
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 

$enviado = mail($to, $subject, $Body, $headers);

if($enviado){
echo json_encode(['success'=>true]); }
else{ echo json_encode(['success'=>false]);}
   

}


if ($zona == "Andes") {
  $to      = 'jmarin@keystone.net.ve';
$subject = "Un nuevo cliente";
$headers = "From: ".$nombre." <".$email.">\r\n"; $headers = "Reply-To: ".$email."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();

$Body = "¡Hola José Marín! Un nuevo cliente en tu zona espera tu llamada!<br>";
$Body .= "Nombre:<br> ";
$Body .= $nombre."<br>";
$Body .= "Email: <br>";
$Body .= $email."<br>";
$Body .= "Teléfono:<br>";
$Body .= $telefono."<br>";
$Body .= "Estado: <br>";
$Body .= $estado."<br>";
$Body .= "Ciudad: <br>";
$Body .= $ciudad."<br>";
$Body .= "Zona: <br>";
$Body .= $zona."<br>";

$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 

$enviado = mail($to, $subject, $Body, $headers);

if($enviado){
echo json_encode(['success'=>true]); }
else{ echo json_encode(['success'=>false]);}
   

}


if ($zona == "Centro-occidente ") {
  $to      = 'jlmarin@keystone.net.ve';
$subject = "Un nuevo cliente";
$headers = "From: ".$nombre." <".$email.">\r\n"; $headers = "Reply-To: ".$email."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();

$Body = "¡Hola José Leonardo Marín! Un nuevo cliente en tu zona espera tu llamada!<br>";
$Body .= "Nombre:<br> ";
$Body .= $nombre."<br>";
$Body .= "Email: <br>";
$Body .= $email."<br>";
$Body .= "Teléfono:<br>";
$Body .= $telefono."<br>";
$Body .= "Estado: <br>";
$Body .= $estado."<br>";
$Body .= "Ciudad: <br>";
$Body .= $ciudad."<br>";
$Body .= "Zona: <br>";
$Body .= $zona."<br>";
$Body .= "Comunícate con tu cliente lo antes posible para duplicar las posibilidades de vender y que sienta atendido."; 

$enviado = mail($to, $subject, $Body, $headers);

if($enviado){
echo json_encode(['success'=>true]); }
else {echo json_encode(['success'=>false]);}
   

}
    
    
 $to = $email;  
    $subject = "landign"; 
$Body = "¡Hola! ".$nombre.",<br>";

$Body .= "Falta poco para que te conviertas en un aliado comercial de Sky Lubricantes.<br>";

$Body .= "En los próximos días el Distribuidor de tu zona se comunicará contigo al teléfono de agregaste en el formulario,
para acordar los detalles de tu solicitud.<br>";  

$Body .= "Para más información entra en nuestra web skylubricantes.com
Si deseas compartir el link para que amigos o aliados se registren, lo puedes hacer aquí skylubricantes.com/landing<br>";    
    
    
    $headers = "From: Sky <info@skylubricantes.com>\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
   $enviado = mail($to, $subject, $Body, $headers);


}
?>