
<?php include 'db.php'; ?>
<h2>Tarefas</h2>
<form method="post">
<input name="titulo" placeholder="Título">
<textarea name="descricao"></textarea>
<input name="usuario_id" placeholder="ID Usuário">
<button name="add">Adicionar</button>
</form>
<?php
if(isset($_POST['add'])){
$conn->query("INSERT INTO tarefas VALUES (NULL,'$_POST[titulo]','$_POST[descricao]',$_POST[usuario_id])");
}
$res=$conn->query("SELECT * FROM tarefas");
while($t=$res->fetch_assoc()){
echo "$t[id] - $t[titulo] (Usuário $t[usuario_id])<br>";
}
?>
