<?php
include 'db.php';

$result = mysqli_query($conn, "
    SELECT produtos.nome, produtos.preco, categorias.nome AS categoria
    FROM produtos
    LEFT JOIN categorias ON produtos.categoria_id = categorias.id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vida dos Bichos</title>
</head>
<body>

<h1>Vida dos Bichos - Loja</h1>

<table border="1">
<tr>
    <th>Produto</th>
    <th>Preço</th>
    <th>Categoria</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['nome']; ?></td>
    <td>R$ <?php echo $row['preco']; ?></td>
    <td><?php echo $row['categoria']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
