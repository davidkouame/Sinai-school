<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ActualiteModel;

class ActualitesAll extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Actualites all',
            'description' => 'Implements a simple all actualites.'
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

        $this->page["actualitesall"] = $actualites;
    }
}
