<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use BootnetCrasher\School\Models\ParametrageModel;

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
        try{
            // recuperation des parametres de l'école
            $this->page["nom_ecole"] = ParametrageModel::where('key', 'name_ecole')->first();            
            $this->page["adresse_postale_ecole"] = ParametrageModel::where('key', 'adresse_postale_ecole')->first();
            $this->page["tel_ecole"] = ParametrageModel::where('key', 'tel_ecole')->first();
            $this->page["email_ecole"] = ParametrageModel::where('key', 'email_ecole')->first();
        } catch (Exception $ex) {
            trace_log("Une erreur est survenue lors de la recuperation des "
                    . "parametres, raison :".$ex->getMessage());
        }
        // recuperation de toutes les actualites
        // $actualites = ActualiteModel::paginate(5);

        // $this->page["actualites"] = $actualites;
    }
}
