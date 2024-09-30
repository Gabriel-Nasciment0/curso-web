<?php
$login = 'gabriel';
$senha = sha1('gabriel');


if (isset($_POST['login'])) {

    if ($_POST['login'] == $login && sha1($_POST['senha']) == $senha) {
        echo 'logado';
        echo $senha;
    } else {
        echo 'falha no login';
    }
}


?>

<form method="post">
    <input type="text" name="login" placeholder="Digite seu email" required>
    <input type="password" name="senha" placeholder="Digite sua senha" required>
    <input type="submit" name="acao" value="Enviar">
</form>