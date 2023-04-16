<?php 

require('master.php');
plantilla::aplicar();

$f = $_GET['f'];



if($_POST) {
    $datos = json_encode($_POST);

    if(!is_dir('data')) {
        mkdir('data');
    }

    file_put_contents('data/' .$f,  $datos);
}


$fila = new stdClass();
$id = '';

if(isset($_GET['f'])) {
    $ruta = 'data/' . $_GET['f'];

    if(is_file($ruta)) {
        $tmp = file_get_contents($ruta);

        $fila = json_decode($tmp);

        $id = $_GET['f'];
    }
}

?>
<div class="container" style="margin-top: 40px; padding:40px; border-radius:10px">
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s12 m4 s4">
          <input placeholder="Ingresa el Numero de empleado" type="text" name='employee_number' value="<?= $fila -> employee_number ?>">
          <label><b>Numero de empleado</b></label>
        </div>

        <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el nombre" type="text" name='name' value="<?= $fila -> name ?>">
                <label><b>Nombre</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el apellido" type="text" name='last_name' value="<?= $fila -> last_name ?>">
                <label><b>Apellidos</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la fecha de nacimiento" type="date" name='birthday' value="<?= $fila -> birthday ?>">
                <label><b>fecha de nacimiento</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la cédula" type="text" name='identification' value="<?= $fila -> identification ?>">
                <label><b>Cédula</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la dirección" type="text" name='address' value="<?= $fila -> address ?>">
                <label><b>Dirección</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el email" type="text" name='email' value="<?= $fila -> email ?>">
                <label><b>E-mail</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el Teléfono" type="text" name='tel' value="<?= $fila -> tel ?>">
                <label><b>Teléfono</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la nacionalidad" type="text" name='nationality' value="<?= $fila -> nationality ?>">
                <label><b>Nacionalidad</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el Horario laboral" type="text" name='working_hours' value="<?= $fila -> working_hours ?>">
                <label><b>Horario Laboral</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Fecha de ingreso a la empresa" type="date" name='date' value="<?= $fila -> date ?>">
                <label><b>Fecha de Ingreso</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa una url de la foto" type="text" name='photo' value="<?= $fila -> photo ?>">
                <label><b>Foto</b></label>
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input required placeholder="Ingresa el Cargo" type="text" name='job' value="<?= $fila -> job ?>">
                <label><b>Cargo</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el departamento" type="text" name='department' value="<?= $fila -> department ?>">
                <label><b>Departamento</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa el sueldo contratado" type="text" name='salary' value="<?= $fila -> salary ?>">
                <label><b>Sueldo Contratado</b></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la latitud de ubicacion" type="text" name='latitude' value="<?= $fila -> latitude ?>">
                <label><b>Latitud</b></label>
            </div>

            <div class="input-field col s12 m4 s4">
                <input placeholder="Ingresa la longitud de ubicacion" type="text" name='longitude' value="<?= $fila -> longitude ?>">
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