<?php namespace BootnetCrasher\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherSchoolExamen extends Migration
{
    public function up()
    {
        Schema::rename('bootnetcrasher_school_exame', 'bootnetcrasher_school_examen');
        Schema::table('bootnetcrasher_school_examen', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('bootnetcrasher_school_examen', 'bootnetcrasher_school_exame');
        Schema::table('bootnetcrasher_school_exame', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
