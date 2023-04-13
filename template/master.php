<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$file_directory = './data';
$inside_file_directory = $file_directory . '/';

class plantilla {

    public static $instancia = null;

    public static function aplicar() {
        self::$instancia = new plantilla();
    }

    public function __construct() {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
            <link rel="stylesheet" href="../styles/Materialize/css/materialize.min.css">
            <link rel="stylesheet" href="../map/leaflet.css"/>
            <script src="../map/leaflet.js"></script>
            <script src="../styles/Materialize/js/materialize.min.js"></script>
            <link rel="stylesheet" href="../styles/style.css">
            <title>Empleados</title>
            
        </head>
        <body>

            <nav class="no-print nav-wrapper">
                <div class="nav-wrapper" style="padding: 0 20px;">
                    <a href="../index.php" class="brand-logo">Lista de Empleados</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="../pages/map.php">Mapa</a></li>
                        <li><a href="../pages/register.php">Registrar Empleado</a></li>
                    </ul>
                </div>
            </nav>
<?php 

    }

    public function __destruct() {
        ?>

    </body>
    </html>

    <?php

    }
}






