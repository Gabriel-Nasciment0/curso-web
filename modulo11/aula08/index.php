<?php

// function cpfValido($cpf)
// {
//     $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/';
//     return preg_match($expressao, $cpf);
// } //cpf valido


// if (isset($_POST['acao'])) {
//     $cpf = $_POST['cpf'];

//     if (cpfValido($cpf)) {
//         echo 'O cpf e valido';
//     } else {
//         echo 'O cpf e invalido';
//     }
// }
?>
<!-- <form method="post">
    <input type="text" name="cpf">
    <input type="submit" name="acao"/>
 </form>
 Nao funciona essa poha
 -->
<?php

function cpfValido($cpf)
{
    // Remover caracteres especiais do CPF
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verificar se o CPF tem 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verificar se todos os dígitos são iguais (exemplo: 111.111.111-11)
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Cálculo para validar os dígitos verificadores
    for ($t = 9; $t < 11; $t++) {
        $d = 0;
        for ($c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }

    return true;
} // cpfValido

if (isset($_POST['acao'])) {
    $cpf = $_POST['cpf'];

    if (cpfValido($cpf)) {
        echo 'O CPF é válido';
    } else {
        echo 'O CPF é inválido';
    }
}
?>
<!-- agora esse funciona -->
<form method="post">
    <input type="text" name="cpf" placeholder="Digite seu CPF">
    <input type="submit" name="acao" value="Validar CPF">
</form>