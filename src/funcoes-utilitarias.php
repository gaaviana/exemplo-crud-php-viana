<?php
function formatarPreco(float $valor):string {
    return 'R$ '.number_format($valor, 2, ',', '.');
}

function total(float $valor, int $qtd):string {
    $calcular = $valor * $qtd;
    return formatarPreco($calcular);
};
