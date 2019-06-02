<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ParametrageModel;

class Parametrages extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Parametrage all',
            'description' => 'Implements a simple all Parametrage.'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }

    public function onRun(){
        
        // recuperation de touts les parametrages
        $number_front = ParametrageModel::where('key', 'number_front')->first();
        $logo = ParametrageModel::where('key', 'logo')->first();
        $email_front = ParametrageModel::where('key', 'email_front')->first();

        $parametrages = [
                            "logo" => $logo->logo->getPath(),
                            "number_front" => $number_front->value,
                            "email_front" => $email_front->value
                        ];

        $this->page["parametrages"] = $parametrages;
    }
}
