<?php namespace BootnetCrasher\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBootnetcrasherSchoolProfesseur extends Migration
{
    public function up()
    {
        Schema::create('bootnetcrasher_school_professeur', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('email', 255);
            $table->string('telephone', 10);
            $table->string('matiere', 255);
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bootnetcrasher_school_professeur');
    }
}
