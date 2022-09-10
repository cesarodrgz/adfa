<?php 
include "../../conexion/conexion.php";

$equipo=(isset($_POST['equipo']))?$_POST['equipo']:"";
$pj=(isset($_POST['pj']))?$_POST['pj']:"";
$pg=(isset($_POST['pg']))?$_POST['pg']:"";
$pe=(isset($_POST['pe']))?$_POST['pe']:"";
$pp=(isset($_POST['pp']))?$_POST['pp']:"";
$gf=(isset($_POST['gf']))?$_POST['gf']:"";
$gc=(isset($_POST['gc']))?$_POST['gc']:"";
$dif=(isset($_POST['dif']))?$_POST['dif']:"";
$puntos=(isset($_POST['puntos']))?$_POST['puntos']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch ($accion) {
    case 'btnAgregar':
        echo $equipo;
        echo "Agregar";
        break;

    case 'btnModificar':
        echo $equipo;
        echo "Modificar";
        break;
    
    case 'btnEliminar':
        echo $equipo;
        echo "Eliminar";
        break;

    case 'btnCancelar':
        echo $equipo;
        echo "Cancelar";
        break;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Modificar Puntajes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Sweet Alert CDN-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-12-9">
                <h1 class="text-primary">Tabla de posiciones</h1>
                <form action="" method="post">
                    <label for="equipo">Equipo:</label>
                    <input class="form-control" type="text" name="equipo" 
                    value="<?php echo $equipo; ?>"
                    placeholder="Ingrese el nombre del equipo">
                    <br>

                    <label for="pj">Partidos jugados:</label>
                    <input class="form-control" type="tel" name="pj"
                    value="<?php echo $pj; ?>" 
                    placeholder="Número de partidos jugados">
                
                    <br>
                    <label for="pg">Partidos Ganados:</label>
                    <input class="form-control" type="tel" name="pg" 
                    value="<?php echo $pg; ?>"
                    placeholder="Partidos Ganados">

                    <br>
                    <label for="pe">Partidos empatados:</label>
                    <input class="form-control" type="tel" name="pe" 
                    value="<?php echo $pe; ?>"
                    placeholder="Partidos empatados">

                    <br>
                    <label for="pp">Partidos Perdidos:</label>
                    <input class="form-control" type="tel" name="pp" 
                    value="<?php echo $pp; ?>"
                    placeholder="Partidos perdidos">

                    <br>
                    <label for="gf">Goles a favor:</label>
                    <input class="form-control" type="tel" name="gf" 
                    value="<?php echo $gf; ?>"
                    placeholder="Goles a favor">

                    <br>
                    <label for="gc">Goles en contra:</label>
                    <input class="form-control" type="text" name="gc" 
                    value="<?php echo $gc; ?>"
                    placeholder="Goles en contra">

                    <br>
                    <label for="dif">Diferencia de Goles:</label>
                    <input class="form-control" type="text" name="dif" 
                    value="<?php echo $dif; ?>"
                    placeholder="Goles de diferencia">

                    <br>
                    <label for="puntos">Puntos:</label>
                    <input class="form-control" type="text" name="puntos" 
                    value="<?php echo $puntos; ?>"
                    placeholder="Puntos">

                    <br>
                    <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Agregar</button>
                    <button value="btnModificar" type="submit" name="accion">Modificar</button>
                    <button value="btnEliminar" type="submit" name="accion">Eliminar</button>
                    <button value="btnCancelar" type="submit" name="accion">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>