<?php

function GuardarEmpleados($empleados){
    $sql="INSERT INTO empleados (Nombres, Apellidos, Telefonos, Correos, Puestos, Fotos)
    VALUES ('{$empleados->Nombres}', '{$empleados->Apellidos}', '{$empleados->Telefonos}', '{$empleados->Correos}', '{$empleados->Puestos}', '{$empleados->Fotos}')";

    conexion::consulta($sql);
}

function GuardarDatosEntradas($datos){
    $sql="INSERT INTO datosentradas (user, pass, admin)
    VALUES ('{$datos->user}', '{$datos->pass}', '{$datos->admin}')";

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

function Login($user){

    $sql = "SELECT * FROM DatosEntradas WHERE user = '{$user}'";

    $rs = conexion::consulta($sql);
    $row = mysqli_fetch_assoc($rs);

    $entrada=new stdClass();
    $entrada->id = $row['id'];
    $entrada->user = $row['user'];
    $entrada->pass = $row['pass'];
    $entrada->admin = $row['admin'];

    return $entrada;
}

function BorrarEmpleados($elid){

    $sql = "DELETE FROM empleados WHERE id = '{$elid}'";

    conexion::consulta($sql);
}

function BorrarDatosEntradas($elid){
    $sql = "DELETE FROM datosentradas WHERE user = '{$elid}'";

    conexion::consulta($sql);
}

