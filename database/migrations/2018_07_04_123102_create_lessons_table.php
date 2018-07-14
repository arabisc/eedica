<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('lesson_content');
            $table->integer('position')->nullable();
            $table->tinyInteger('free_lesson')->nullable()->default('0');
            $table->tinyInteger('publish')->nullable()->default('0');
            $table->enum('type', ['video', 'sound', 'text'])->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);

            $table->foreign('course_id')
                ->references('id')->on('courses')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
