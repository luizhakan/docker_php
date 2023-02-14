<h1>Lista de Usuários</h1>

<?php

$pdo = new PDO("mysql: dbname=meudb;host=db", "luizhakan", "1234");
$sql = $pdo->query("SELECT * FROM usuarios");

if ($sql) {
    $usuarios = $sql->fetchAll();
    echo "<ul>";
    foreach ($usuarios as $usuario) {
        echo "<li>" . htmlentities($usuario['nome'], ENT_QUOTES, "UTF-8") . "</li>";
    }
    echo "</ul>";
} else {
    echo "Não há usuários cadastrados!";
}
