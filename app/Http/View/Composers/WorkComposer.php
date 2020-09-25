<?php

namespace App\Http\View\Composers;

use Storage;
use Illuminate\View\View;

class WorkComposer
{
    const JSON_DIR = __DIR__ . '../';
    private $projects;

    public function __construct()
    {
        $json = Storage::disk('public')->get('json/projects.json');
        $projects = json_decode($json, true);
        $this->projects = $projects;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('photoName', env('PHOTO_NAME_WORK'));
        $view->with('projects', $this->projects);
    }
}
