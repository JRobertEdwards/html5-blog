<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class HomeComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('photoName', env('PHOTO_NAME_HOME'));
    }
}
