
<?php include 'db.php'; ?>
<h2>Usuários</h2>
<form method="post">
<input name="nome" placeholder="Nome">
<input name="email" placeholder="Email">
<button name="add">Adicionar</button>
</form>
<?php
if(isset($_POST['add'])){
$conn->query("INSERT INTO usuarios VALUES (NULL,'$_POST[nome]','$_POST[email]')");
}
$res=$conn->query("SELECT * FROM usuarios");
while($u=$res->fetch_assoc()){
echo "$u[id] - $u[nome] ($u[email])<br>";
}
?>
