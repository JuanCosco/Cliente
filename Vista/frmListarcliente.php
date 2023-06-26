<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body bgcolor="#FFFFCC" text="#FF0000">
    <?php
    include("../Controlador/clienteController.php");
    ?>
    <div class="col-12 p-4">
        <h1 class="text-center alert alert-secondary">Datos del Curso</h1>
        <table class="table">
            <thead class="bg-light">
                <tr class="center">
                    <th scope="col">ID</th>
                    <th scope="col">DNI</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CELULAR</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = listarCurso();
                while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['dni'] ?></td>
                        <td><?= $row['apellidos'] ?></td>
                        <td><?= $row['nombres'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['celular'] ?></td>
                        <td><?= $row['direccion'] ?></td>
                        <td>
                            <a href="frm_modificarcliente.php?idC=<?=$row['id']?>" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i> Modificar </a>
                            <a href="../Controlador/clienteController.php?id=<?=$row['id']?>" class="btn btn-small btn-danger"><i class="bi bi-person-fill-x"></i> Eliminar </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="../index.php">Regresar</a>
    </div>
</body>

</html>