<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8"/>
        <title>dashboard</title>
</heard>
<body>
    <h2>Sesion abierta</h2>
    <p>
<?php
    if(isset($_POST['nombre'])){
        $_SESSION['nombre'] = $_POST['nombre'];
        echo "Bienvenido,:<b> ".$_POST['nombre'];
    }else{
        if(isset($_SESSION['nombre'])){
            echo "Has iniciado secioncomo: ".$_SESSION['nombre'];
            }else{
        // Si la sesion expira
        echo "Acceso Restringido";
        }    
    }  
?>
</p>
<br>
<p><a href="login.php" >Ir a la pagina inicial</a></p>
<br>
<p><a href="logout.php">Cerrar sesion</a></p>
</body>
</html>              
                        

