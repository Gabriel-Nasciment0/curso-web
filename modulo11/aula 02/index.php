<?php
class Teste
{
    public static function print()
    {
        static $n = 0;
        $n++;
        return $n;
    }
}
echo Teste::print();
echo '<br/>';
echo Teste::print();
