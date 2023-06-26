<?php
include("conexion.php");
function insertarCliente($dni, $ape, $nom, $ema, $cel, $dire)
{
    global $conexion;
    $sql = "INSERT INTO tcliente(dni,apellidos,nombres,email,celular,direccion) VALUES('" . $dni . "','" . $ape . "','" . $nom . "','" . $ema . "','" . $cel . "','" . $dire . "')";
    if (mysqli_query($conexion, $sql)) {
        return "Los datos fueron registrados con exito";
    } else {
        return " los datos no se registraron";
    }
}
function getCliente()
{
    global $conexion;
    $sql = "SELECT * FROM tcliente";
    return mysqli_query($conexion, $sql);
}
function consultarCliente($idC)
{
    global $conexion;
    $sql = "SELECT * FROM tcliente WHERE id= '" . $idC . "'";
    return mysqli_query($conexion, $sql);
}
function modificar($id, $dni, $ape, $nom, $ema, $cel, $dire)
{
    global $conexion;
    $sql = "UPDATE tcliente SET dni='".$dni."',apellidos='".$ape."',nombres='".$nom."',
    email='".$ema."',celular='".$cel."',direccion='".$dire."' WHERE id= '" . $id . "'";
    if(mysqli_query($conexion,$sql)){
        return "Los datos del cliente fueron modificados con exito";
    }else{
        return "Los datos no se modificaron";
    }

}
function eliminar($id)
{
    global $conexion;
    $sql = "DELETE FROM tcliente WHERE id= '" . $id . "'";
    if(mysqli_query($conexion,$sql)){
        return "Los datos del cliente fueron eliminados con exito";
    }else{
        return "Los datos no se eliminaron";
    }
}
