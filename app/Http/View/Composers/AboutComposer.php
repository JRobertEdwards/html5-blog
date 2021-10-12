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
        
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pcSpecs', config('pc-specs'));
        $view->with('photoName', env('PHOTO_NAME_ABOUT'));
    }
}
