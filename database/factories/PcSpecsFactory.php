<?php

/**
 * @var \Illuminate\Database\Eloquent\Factory $factory 
 */

use App\Models\PcSpecs;
use Faker\Generator as Faker;

$factory->define(
    PcSpecs::class, function (Faker $faker) {
        return [
        'CPU' => 'Ryzen 3600',
        'Graphics Card' => 'RTX 2070 Super',
        'Motherboard' => 'MSI GamingPlus',
        'Case' => 'NZXT H510',
        'RAM' => 'Corsair Vengeance 3200MHz',
        'Power Supply' => 'EVGA Supernova 650 Watt',
        'Storage' => 'Samsung EVO 970 NVMe 1TB SSD'
        ];
    }
);
