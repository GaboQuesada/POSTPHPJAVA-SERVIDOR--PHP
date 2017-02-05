

<?php

function getRequestMethod() {
    return $_SERVER['REQUEST_METHOD'];
}


switch (getRequestMethod()) {
    case 'PUT' :
        break;
    case 'POST':

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        echo "este es: ";
        echo $nombre;
 

    default :
        break;
}
?>