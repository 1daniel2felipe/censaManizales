<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">

        <br>
        <input type="text" name="Entrada" placeholder="Hora de entrada">
        <br>
        <br>
        <input type="submit" value="Enviar">


    </form>

    <?php    
        require("model/conexion.php");
        @$tipoH = $_POST['Entrada'];
        $query = mysqli_query($conexion,"INSERT INTO tipoH(nombre) VALUES('$tipoH')");

        @$tipoH = 0;
       
        /*if($tipoH != null){
            echo "";
        }
        else{
            
            @$tipoH = $_REQUEST['Entrada'];
            echo $tipoH;
        }*/

    
    ?>
    
</body>
</html>