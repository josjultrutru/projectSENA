<?php
require '../src/Crud.php';

$crud = new Crud($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $crud->create($_POST['name'], $_POST['email']);
    } elseif (isset($_POST['update'])) {
        $crud->update($_POST['id'], $_POST['name'], $_POST['email']);
    } elseif (isset($_POST['delete'])) {
        $crud->delete($_POST['id']);
    }
}

$users = $crud->read();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD en PHP</title>
</head>
<body>
    <h1>CRUD en PHP</h1>

    <form method="post">
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="create">Crear</button>
    </form>
<h2>Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <input type="text" name="name" value="<?= $user['name'] ?>" required>
                    <input type="email" name="email" value="<?= $user['email'] ?>" required>
                    <button type="submit" name="update">Actualizar</button>
                </form>
                <form method="post" style="display:inline;">
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>