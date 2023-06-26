<?php
include("../Modelo/clienteDAO.php");
if (isset($_POST['btnActualizar'])) { //Modificar Cliente
    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $ape = $_POST['apellido'];
    $nom = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $m = modificar($id, $dni, $ape, $nom, $email, $celular, $direccion);
    header("Location: ../index.php?m=$m");
} else if (isset($_GET['id'])) { //Eliminar Cliente
    $id = $_GET['id'];
    $m = eliminar($id);
    header("Location: ../index.php?m=$m");
} else if (isset($_POST['btnRegistrar'])) { //Registrar Cliente
    $dni = $_POST['dni'];
    $ape = $_POST['apellido'];
    $nom = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $m = insertarCliente($dni, $ape, $nom, $email, $celular, $direccion);
    header("Location: ../index.php?m=$m");
}
function consultarCli($idC)
{
    return consultarCliente($idC);
}
function listarCurso()
{
    return getCliente();
}
