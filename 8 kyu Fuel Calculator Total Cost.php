<?php
function fuel_price($litres, $price_per_litre) {
    $discount = 0.05 * floor($litres / 2);
    $total = ($litres * ($price_per_litre - ($discount > 0.25 ? 0.25 : $discount)));
    return $total;
}

echo fuel_price(1968, 10);
