
<?php
include 'db.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    mysqli_query($conn, "INSERT INTO categorias (nome) VALUES ('$nome')");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM categorias WHERE id=$id");
}

$result = mysqli_query($conn, "SELECT * FROM categorias");
?>

<h2>Categorias</h2>

<form method="POST">
    Nome: <input type="text" name="nome" required>
    <button type="submit">Cadastrar</button>
</form>

<table border="1">
<tr><th>ID</th><th>Nome</th><th>Ação</th></tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nome']; ?></td>
    <td><a href="?delete=<?php echo $row['id']; ?>">Excluir</a></td>
</tr>
<?php } ?>

</table>
