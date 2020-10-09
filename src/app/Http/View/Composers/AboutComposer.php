<?php

namespace App\Http\View\Composers;

use App\Models\PcSpecs;
use Illuminate\View\View;

class AboutComposer
{
    /**
     * The model for the PC Specs in the db
     *
     * @var PcSpecs
     */
    protected $pcSpecs;

    /**
     * Create a new profile composer.
     *
     * @param  PcSpecs $pcSpecs
     * @return void
     */
    public function __construct(PcSpecs $pcSpecs)
    {
        $this->pcSpecs = $pcSpecs;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pcSpecs', $this->pcSpecs::all());
        $view->with('photoName', env('PHOTO_NAME_ABOUT'));
    }
}
