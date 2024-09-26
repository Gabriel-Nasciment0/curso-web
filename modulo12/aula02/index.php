<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=modulo12', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Não conectou! Tente mais tarde';
    exit();
}

if (isset($_POST['acao'])) {
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui é onde a senha deve ser comparada usando hash
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE login = ?");
    $sql->execute(array($login));

    if ($sql->rowCount() == 1) {
        $usuario = $sql->fetch();
        if (password_verify($senha, $usuario['senha'])) {
            echo 'Logado';
        } else {
            echo 'Falha no login: senha incorreta';
        }
    } else {
        echo 'Falha no login: usuário não encontrado';
    }
}
?>

<form method="post">
    <input type="text" name="email" placeholder="Digite seu email" required>
    <input type="password" name="senha" placeholder="Digite sua senha" required>
    <input type="submit" name="acao" value="Enviar">
</form>