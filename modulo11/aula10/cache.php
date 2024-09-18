<?php

class cache
{
    public function readcache()
    {
        if (file_exists('cache')) {
            $data = json_decode((file_get_contents('cache')));
            if ($data->tempo < time()) {
                //criando cache
                echo 'Criando novo cache <hr>';
                $data = json_encode(['tempo' => time() + 20, 'conteudo' => '<h2>O nosso site está em manutenção</h2>']);
                file_put_contents('cache', $data);
                $data = json_decode($data);
            }
        } else {
            echo 'criando cache pela primeira vez';
            $data = json_encode(['tempo' => time() + 20, 'conteudo' => '<h2>O nosso site está em manutenção</h2>']);
            file_put_contents('cache', $data);
            $data = json_decode($data);
        }
        return $data;
    }
};
