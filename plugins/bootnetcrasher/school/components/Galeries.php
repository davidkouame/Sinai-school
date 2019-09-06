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
<<<<<<< HEAD
        
        // recuperation de toutes les galleries
        $galeries = Gallery::paginate(4);
        
        // dd($galeries[0]->images[0]->getPath());

        $this->page["galeries"] = $galeries;
=======
        // recuperation de toutes les galleries
        $galeries = Gallery::paginate(4);
        $this->page["active"] = "viescolaire";
        $this->page["galeries"] = $galeries;
        $this->page["galerieswithoutpaginate"] = Gallery::all();
>>>>>>> b45d59062f1b73834ed82e44239664cc7acdff26
    }
}
