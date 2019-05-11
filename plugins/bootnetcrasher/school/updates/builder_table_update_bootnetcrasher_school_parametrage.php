<?php namespace BootnetCrasher\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherSchoolParametrage extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_school_parametrage', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('key')->change();
            $table->string('value')->change();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_school_parametrage', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('key', 191)->change();
            $table->string('value', 191)->change();
        });
    }
}
