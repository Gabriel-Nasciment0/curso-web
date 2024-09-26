<?php
$nome = "Gabriel";
function teste(&$nome){
    $nome= "joao";
}
teste($nome);
echo $nome;