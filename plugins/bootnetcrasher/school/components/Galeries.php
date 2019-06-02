<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use Raviraj\Rjgallery\Models\Gallery;

class Galeries extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Galeries',
            'description' => 'Implements a simple galerie.'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        
        // recuperation de toutes les galleries
        $galeries = Gallery::paginate(4);
        
        // dd($galeries[0]->images[0]->getPath());

        $this->page["galeries"] = $galeries;
    }
}
