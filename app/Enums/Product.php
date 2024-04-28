<?php

namespace App\Enums;

final class Product
{
    const STATUS = [
        'available', 'out of stock', 'order',
    ];

    const RANGE_PRICE = [
        'duoi-10trieu' => [0, 10000000],
        'tu-10trieu-15trieu' => [10000000, 15000000],
        'tu-15trieu-20trieu' => [15000000, 20000000],
        'tu-20trieu-30trieu' => [20000000, 30000000],
        'tu-30trieu-50trieu' => [30000000, 50000000],
        'tu-50trieu-100trieu' => [50000000, 1000000000],
        'tren-100trieu' => [1000000000, 10000000000]
    ];
}
