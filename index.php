<?php 

require('master.php');


if($_POST) {
    if(is_dir('data') === false) {
        mkdir('data');
    }

    $json = json_encode($_POST);

    file_put_contents('data/' .time() .'json', $json);
}

plantilla::aplicar();

?>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
</script> 

<table class="striped centered container" style="margin-top:50px; width:100%; ">
    <thead>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Sueldo Actual</th>
        <th>Departamento</th>
        <th>Télefono</th>
    </thead>

    <?php
        if(is_dir('data')) {
            $archivos = scandir('data');

            foreach($archivos as $archivo) {
                if($archivo != '.' && $archivo != '..') {
                    $json = file_get_contents('data/' . $archivo);

                    $datos = json_decode($json);

                    echo "
                        <tr>
                            <td><a href='details.php?f={$archivo}''>{$datos -> name}</a></td>
                            <td>{$datos -> job}</td>
                            <td>{$datos -> salary}</td>
                            <td>{$datos -> department}</td>
                            <td>{$datos -> tel}</td>
                            <td>
                                <a class='waves-effect waves-light btn' href='edit.php?f={$archivo}'><img src='styles/icons/edit.svg'></img></a>
                                <a class='btn waves-effect waves-light red lighten-2' href='delete.php?f={$archivo}'>X</a>
                            </td>
                        </tr>
                    ";
                }
            }
        }
    ?>
</table>