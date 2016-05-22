<?php namespace Fes\Notice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFesNoticeCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('fes_notice_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->index();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('fes_notice_categories');
    }
}
