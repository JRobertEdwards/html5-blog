<?php

namespace App\Http\View\Composers;

use App\Models\PcSpecs;
use Illuminate\View\View;

class AboutComposer
{

    /**
     * Create a new profile composer.
     *
     * @param  PcSpecs $pcSpecs
     * @return void
     */
    public function __construct()
    {
        $this->pcSpecs = $this->getPcSpecs();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pcSpecs', $this->pcSpecs);
        $view->with('photoName', env('PHOTO_NAME_ABOUT'));
    }

    private function getPcSpecs()
    {
        return [
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
                'description' => 'Corsair Vengeance 16GB @ 3200Mhz',
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
            ],
        ];

    }
}
