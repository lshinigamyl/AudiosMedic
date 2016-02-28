<?php
if(isset($_POST['asunto']) && !empty($_POST['asunto']) && 
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
    $destino = "audiosyarchivosmedicos@gmail.com";
    $desde = "From:". "audiosyarchivosmedicos@audiosm.esy.es";
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    mail($destino,$asunto,$mensaje,$desde);
    echo "Correo enviado.....";
}
else{
    echo"Problemas al enviar";
}
?>