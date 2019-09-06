<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ActualiteModel;

class Actualites extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Actualites',
            'description' => 'Implements a simple actualites.'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        
        // recuperation de toutes les actualites
        $actualites = ActualiteModel::paginate(4);

        $this->page["actualites"] = $actualites;
    }
}
