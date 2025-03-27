<?php
function formatarPreco($valor) {
    return 'R$ '.number_format($valor, 2, ',', '.');
}