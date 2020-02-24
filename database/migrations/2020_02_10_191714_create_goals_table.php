<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title', 255)->unique();
            $table->string('description', 255)->nullable();
            $table->date('planned_start')->nullable();
            $table->date('planned_end')->nullable();
            $table->enum('term', ['Short Term', 'Long Term','Continuous Pursuit']);
            $table->enum('priority', ['1', '2','3','4','5','6','7','8','9','10'])->default('5');
            $table->enum('status',['Bucket-List','In-Progress','Achieved','Side-Tracked'])->default('Bucket-List');
            $table->string('percentage', 255)->nullable();
            $table->enum('type', ['Goal', 'Task'])->default('Goal');
            $table->bigInteger('task_id')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
