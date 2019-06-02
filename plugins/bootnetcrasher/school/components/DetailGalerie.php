<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use Raviraj\Rjgallery\Models\Gallery;

class DetailGalerie extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Détail galerie',
            'description' => 'Implements a simple détail galerie.'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        try {
            $galerie_slug = $this->param('galerie_slug');
            $galerie = Gallery::where('slug', $galerie_slug)->first();
            // dd($galerie->images);
            $this->page["images"] = $galerie->images;
        } catch (\Exception $e) {
            trace_log("Une erreur s'est produite lors de la recuperation des informations d'une galerie, error:".$e->getMessage());
        }
    }
}
