<?php
$cenexion=mysqli_connect("localhost","root","","prueba2.0");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];

if($_FILES["archivo"]){
    $nombre_base=basename($_FILES["archivo"]["name"]);
    $nombre_final=date("m-d-y"). "-".date("H-i-s"). "-". $nombre_base
    $ruta="archivos/". $nombre_final;
    $subirarchivo=move_uploaded_file($_FILES["archivo"]["tmp_name"],$ruta)
if($subirarchivo){
$insertarSQL="INSERT INTO informes(nombre,apellodo.fecha,archivo) VALUES ('$nombre','$apellido','$fecha','$ruta')";
$resultado=mysqli_query($cenexion,$insertarSQL);
    if($resultado){
        echo "  <script> alert('se ha enviado su informe'); windows.location='index.html'</script>   " ;
    }else{
        printf("Errormessage: %s\n", mysqli_error($cenexion));
    }
}
}else{
    echo " Error al subir archivo";
}