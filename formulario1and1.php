<?php

// LA SIGUIENTE LÍNEA INDICA QUE SI SE HA PULSADO
// EL BOTÓN ENVIAR, SE DEBE EJECUTAR EL CÓDIGO PHP PARA ENVIAR EL
// CORREO. SI EL BOTÓN NO SE HA PULSADO, PASE AL CÓDIGO
// BAJO "else" (QUE MUESTRA EL FORMULARIO EN SU LUGAR. )
if ( isset ( $_POST [ 'buttonPressed' ] )){
$to = $_POST [ "to" ] ;
$subject = 'Envío desde formulario de contacto' ;

// NO SE ACONSEJA CAMBIAR ESTOS VALORES
$message = $_POST [ "message" ] ;
$headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;

// EL TEXTO ENTRE COMILLAS MOSTRADO A CONTINUACIÓN
// SE MUESTRA A LOS USUARIOS TRAS ENVIAR EL FORMULARIO.
echo "¡Se ha enviado tu e-mail!" ;}

else{
?>

<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" />

<table>
<tr>
<td>Tu dirección de email: </td>
<td><input name= "from" type= "text"/></td>
</tr>
<tr>
<td>Dirección de email de destino: </td>
<td><input name= "to" type= "text"/></td>
</tr>
<tr>
<td>Mensaje: </td>
<td><textarea name= "message" cols= "20" rows= "6"></textarea></td>
</tr>
<tr>
<td></td>
<td><input name= "buttonPressed" type= "submit" value= "Send E-mail!" /></td>
</tr>
</table>

</form>

<?php } ?>