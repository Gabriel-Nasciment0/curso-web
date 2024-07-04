<?php



//criando arquivo
$content = 'meu novo conteudo criado com php\r\noutra linha\r\nmais uma linha';
file_put_contents('./file.txt', $content);
