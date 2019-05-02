<?php namespace BootnetCrasher\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherSlideshowSlideshow2 extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_slideshow_slideshow', function($table)
        {
            $table->text('text_slide')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_slideshow_slideshow', function($table)
        {
            $table->dropColumn('text_slide');
        });
    }
}
