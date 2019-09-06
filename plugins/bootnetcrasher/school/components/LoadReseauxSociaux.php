<?php namespace Bootnetcrasher\School\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use BootnetCrasher\School\Models\ParametrageModel;

class LoadReseauxSociaux extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Load reseaux sociaux',
            'description' => 'Load reseaux sociaux'
        ];
    }

    public function onRun(){
        $reseauxsociauxtwiter = ParametrageModel::where('key', 'reseaux-sociaux-twiter')->first();
        $reseauxsociauxlinkedin = ParametrageModel::where('key', 'reseaux-sociaux-linkedin')->first();
        $reseauxsociauxfacebook = ParametrageModel::where('key', 'reseaux-sociaux-facebook')->first();
        $reseauxsociaux = [
                            "reseauxsociauxtwiter" => $reseauxsociauxtwiter->value,
                            "reseauxsociauxlinkedin" => $reseauxsociauxlinkedin->value,
                            "reseauxsociauxfacebook" => $reseauxsociauxfacebook->value,
                        ];
        $this->page["reseauxsociaux"] = $reseauxsociaux;
    }
}
