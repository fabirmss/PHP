<?php

$nome = 'Fabi';

$ehDaMinhaFamilia = str_contains($nome, 'Ramos');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
