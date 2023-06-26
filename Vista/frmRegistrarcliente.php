<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-6 p-4 m-auto" action="../Controlador/clienteController.php" method="post">
        <h4 class="text-center alert alert-secondary">Registro de Cliente</h4>
        <div class="mb-2">
            <label class="form-label">Dni del Cliente</label>
            <input type="text" class="form-control" name="dni">
        </div>
        <div class="mb-2">
            <label class="form-label">Apellidos del Cliente</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="mb-2">
            <label class="form-label">Nombres del Cliente</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-2">
            <label class="form-label">Email del Cliente</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-2">
            <label class="form-label">Celular del Cliente</label>
            <input type="text" class="form-control" name="celular">
        </div>
        <div class="mb-2">
            <label class="form-label">Direccion del Cliente</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <button type="submit" class="btn btn-primary" name="btnRegistrar" value="Registrar Curso"><i class="bi bi-person-add"></i> Registrar Curso</button>
    </form>
</body>

</html>