<?php namespace Fes\Notice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFesNoticeRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('fes_notice_records', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id')->nullable();
            $table->text('title')->nullable();
            $table->boolean('show_home')->default(0);
            $table->string('section');
            $table->date('date')->nullable();
            $table->string('link')->nullable();
            $table->text('message')->nullable();
            $table->text('media')->nullable();
            $table->boolean('published')->default(1);
            $table->integer('sort_order');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fes_notice_records');
    }
}
