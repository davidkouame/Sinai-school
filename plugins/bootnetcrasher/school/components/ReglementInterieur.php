<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ParametrageModel;

class ReglementInterieur extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Reglement intérieur',
            'description' => 'Reglement Intérieur'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        // recuperation du reglement intérieur
        $reglementinterieur = ParametrageModel::where('key', 'reglement-interieur')->first();
        $this->page["reglementinterieur"] = $reglementinterieur;
    }
}
