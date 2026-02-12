<?php
include 'db.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    mysqli_query($conn, "
        INSERT INTO produtos (nome, preco, categoria_id)
        VALUES ('$nome', '$preco', '$categoria')
    ");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM produtos WHERE id=$id");
}

$categorias = mysqli_query($conn, "SELECT * FROM categorias");
$produtos = mysqli_query($conn, "
    SELECT produtos.*, categorias.nome AS categoria
    FROM produtos
    LEFT JOIN categorias ON produtos.categoria_id = categorias.id
");
?>

<h2>Produtos</h2>

<form method="POST">
    Nome: <input type="text" name="nome" required>
    Preço: <input type="number" step="0.01" name="preco" required>

    Categoria:
    <select name="categoria">
        <?php while($cat = mysqli_fetch_assoc($categorias)) { ?>
            <option value="<?php echo $cat['id']; ?>">
                <?php echo $cat['nome']; ?>
            </option>
        <?php } ?>
    </select>

    <button type="submit">Cadastrar</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Categoria</th>
    <th>Ação</th>
</tr>

<?php while($row = mysqli_fetch_assoc($produtos)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nome']; ?></td>
    <td><?php echo $row['preco']; ?></td>
    <td><?php echo $row['categoria']; ?></td>
    <td><a href="?delete=<?php echo $row['id']; ?>">Excluir</a></td>
</tr>
<?php } ?>

</table>
