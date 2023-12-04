<?php session_start();


if(isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "bienvenido $usuario";
}else{
    echo "Acceder";
    echo "<form action='dashboard.php' method='POST'>";
    echo "<input type='text' name='nombre'>";
    echo "<button type='submit'>Acceder</button>";
    echo "</form>";
}

?>