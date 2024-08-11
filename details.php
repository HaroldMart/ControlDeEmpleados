<?php

require('master.php');
plantilla::aplicar()

?>

<?php

$f = $_GET['f'];

if(file_exists('data/' .$f)) {

    $json = file_get_contents('data/' .$f);

    $dato = json_decode($json, false);

    $employee_number = $dato -> employee_number;
    $name = $dato -> name;
    $last_name = $dato -> last_name;
    $birthday = $dato -> birthday;
    $identification = $dato -> identification;
    $address = $dato -> address;
    $email = $dato -> email;
    $tel = $dato -> tel;
    $nationality = $dato -> nationality;
    $date = $dato -> date;
    $working_hours = $dato -> working_hours;
    $department = $dato -> department;
    $photo = $dato -> photo;
    $job = $dato -> job;
    $salary = $dato -> salary;
    $latitude = $dato -> latitude;
    $longitude = $dato -> longitude;
}
?> 

<div class="container detalles">
    <div class="row cont-card">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $photo; ?>">
                </div>
                <hr>
                <div class="card-content">
                <p><b>Numero Empleado: </b><?php echo $employee_number; ?></p>
                <p><b>Nombre: </b><?php echo $name; ?></p>
                <p><b>Apellido: </b><?php echo $last_name; ?></p>
                <p><b>Fecha de Nacimiento: </b><?php echo $birthday; ?></p>
                <p><b>Cedula: </b><?php echo $identification; ?></p>
                <p><b>Direccion: </b><?php echo $address; ?></p>
                <p><b>Fecha de ingreso: </b><?php echo $date; ?></p>
                <p><b>Email: </b><?php echo $email; ?></p>
                <p><b>Telefono: </b><?php echo $tel; ?></p>
                <p><b>Nacionalidad: </b><?php echo $nationality; ?></p>
                <p><b>Departamento: </b><?php echo $department; ?></p>
                <p><b>Cargo: </b><?php echo $job; ?></p>
                <p><b>Horario laboral: </b><?php echo $working_hours; ?></p>
                <p><b>Sueldo: </b><?php echo $salary; ?></p>
                <p><b>Latitud: </b><?php echo $latitude; ?></p>
                <p><b>Longitud: </b><?php echo $longitude; ?></p>
            </div>
            <div class="card-action">
            <a class="btn primary no-print" onclick="print()" href="#"s>Imprimir</a>
            </div>
            </div>
        </div>
    </div>
</div>