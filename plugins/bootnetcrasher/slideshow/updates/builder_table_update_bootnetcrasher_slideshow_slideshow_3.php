<?php namespace BootnetCrasher\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherSlideshowSlideshow3 extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_slideshow_slideshow', function($table)
        {
            $table->string('title_cover', 255)->nullable();
            $table->string('description_cover', 255)->nullable();
            $table->dropColumn('text_slide');
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_slideshow_slideshow', function($table)
        {
            $table->dropColumn('title_cover');
            $table->dropColumn('description_cover');
            $table->text('text_slide')->nullable();
        });
    }
}
