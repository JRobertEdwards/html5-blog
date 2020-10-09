<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertPcSpecsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pc_specs')->insert(
            [
                [
                    'component' => 'CPU',
                    'description' => 'Ryzen 3600',
                    
                ],
                [
                    'component' => 'Graphics Card',
                    'description' => 'RTX 2070 Super',
                ],
                [
                    'component' => 'RAM',
                    'description' => 'Corsair Vengeance 16GB @ 3200MHz',
                ],
                [
                    'component' => 'Motherboard',
                    'description' => 'MSI Gaming Plus',
                ],
                [
                    'component' => 'Storage',
                    'description' => 'Samsung Evo 970 NVMe 1TB SSD',
                ],
                [
                    'component' => 'Power Supply',
                    'description' => 'EVGA Supernova 650 Watt',
                ],
                [
                    'component' => 'Case',
                    'description' => 'NZXT H510',
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('pc_specs')->delete(
            [
                'component' => 'CPU',
                'description' => 'Ryzen 3600',
            ],
            [
                'component' => 'Graphics Card',
                'description' => 'RTX 2070 Super',
            ],
            [
                'component' => 'RAM',
                'description' => 'Corsair Vengeance 16GB @ 3200MHz',
            ],
            [
                'component' => 'Motherboard',
                'description' => 'MSI Gaming Plus',
            ],
            [
                'component' => 'Storage',
                'description' => 'Samsung Evo 970 NVMe 1TB SSD',
            ],
            [
                'component' => 'Power Supply',
                'description' => 'EVGA Supernova 650 Watt',
            ],
            [
                'component' => 'Case',
                'description' => 'NZXT H510',
            ]
        );
    }
}
