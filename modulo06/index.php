<?php



//criando arquivo
// $content = 'meu novo conteudo criado com php \n outra linha \n mais uma linha';
// file_put_contents('./file.txt', $content);
//pega arquivos ja criados
// $content = file_get_contents('https://www.google.com/');
// echo nl2br($content);
for ($i = 0; $i < 100; $i++) {
    //adiciona uma quantidade de arquivos
    // $conteudo = 'Meu conteudo do arquivo' . $i;
    // file_put_contents('file' . $i . '.txt', $conteudo);
    //deleta uma quantidade de arquivos
    unlink('file' . $i . '.txt');
    
}
