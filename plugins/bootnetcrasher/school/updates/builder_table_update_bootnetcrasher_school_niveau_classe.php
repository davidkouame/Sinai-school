<?php namespace BootnetCrasher\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherSchoolNiveauClasse extends Migration
{
    public function up()
    {
        Schema::rename('bootnetcrasher_school_niveu_classe', 'bootnetcrasher_school_niveau_classe');
        Schema::table('bootnetcrasher_school_niveau_classe', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('bootnetcrasher_school_niveau_classe', 'bootnetcrasher_school_niveu_classe');
        Schema::table('bootnetcrasher_school_niveu_classe', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
