<?php

function GuardarEmpleados($empleados){
    $sql="INSERT INTO empleados (Nombres, Apellidos, Telefonos, Correos, Puestos, Fotos)
    VALUES ('{$empleados->Nombres}', '{$empleados->Apellidos}', '{$empleados->Telefonos}', '{$empleados->Correos}', '{$empleados->Puestos}', '{$empleados->Fotos}')";

    conexion::consulta($sql);
}

function MostrarEmpleados(){
    $sql = "SELECT * FROM empleados";
    $rs = conexion::consulta($sql);

    $final=[];
    while($fila = mysqli_fetch_assoc($rs)){
        $final[]=$fila;
    }
    return $final;
}