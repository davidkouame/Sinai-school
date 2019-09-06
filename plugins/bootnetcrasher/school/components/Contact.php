<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ActualiteModel;

class Contact extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact',
            'description' => 'Implements a simple contact.'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        
        // recuperation de toutes les actualites
        // $actualites = ActualiteModel::paginate(5);

        // $this->page["actualites"] = $actualites;
    }
}
