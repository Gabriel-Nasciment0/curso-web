<?php
$str = '<div class="teste">
    <h2>Olá mundo</h2>
</div>
<div class="teste2"><h2>outra frase</h2></div>';


preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s', $str, $matches);

echo htmlentities($matches[2][1]);
