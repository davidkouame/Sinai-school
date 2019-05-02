<?php namespace BootnetCrasher\School;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Bootnetcrasher\School\Components\Actualites' => 'actualites',
            '\Bootnetcrasher\School\Components\ActualitesAll' => 'actualitesall',
            '\Bootnetcrasher\School\Components\DetailActualite' => 'detailactualite',
            '\Bootnetcrasher\School\Components\ExamensAll' => 'examensall',
            '\Bootnetcrasher\School\Components\DetailExamen' => 'detailexamen',
            
        ];
    }

    public function registerSettings()
    {
    }
}
