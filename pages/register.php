<?php 

require('./template/master.php');

if($_POST) {
    if(is_dir($file_directory) === false) {
        mkdir($file_directory);
    }

    $json = json_encode($_POST);

    file_put_contents($inside_file_directory .time() .'json', $json);
}

plantilla::aplicar();

?>

<div class="container" style="margin-top: 40px; padding:40px; border-radius:10px">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el Numero de empleado" type="text" name='employee_number'>
                <label><b>Numero de empleado</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el nombre" type="text" name='name'>
                <label><b>Nombre</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el apellido" type="text" name='last_name'>
                <label><b>Apellidos</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la fecha de nacimiento" type="date" name='birthday'>
                <label><b>fecha de nacimiento</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la cédula" type="text" name='identification'>
                <label><b>Cédula</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la dirección" type="text" name='address'>
                <label><b>Dirección</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el email" type="text" name='email'>
                <label><b>E-mail</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el Teléfono" type="text" name='tel'>
                <label><b>Teléfono</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la nacionalidad" type="text" name='nationality'>
                <label><b>Nacionalidad</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Lun a vier 9am - 4pm" type="text" name='working_hours'>
                <label><b>Horario Laboral</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Fecha de ingreso a la empresa" type="date" name='date'>
                <label><b>Fecha de Ingreso</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa una url de la foto" type="text" name='photo'>
                <label><b>Foto</b></label>
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el Cargo" type="text" name='job'>
                <label><b>Cargo</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el departamento" type="text" name='department'>
                <label><b>Departamento</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el sueldo contratado" type="text" name='salary'>
                <label><b>Sueldo Contratado</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa la latitud de ubicacion" type="text" name='latitude'>
                <label><b>Latitud</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa la longitud de ubicacion" type="text" name='longitude'>
                <label><b>Longitud</b></label>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button class="waves-effect waves-light btn">Guardar</button>
            </div>
            <div class="col">
                <a class="btn waves-effect waves-light red lighten-2" href="/index.php">Cancelar</a>
            </div>
        </div>
    </form>
</div>