<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('cat_id');
            $table->string('name');
            $table->string('purpose');
            $table->float('sum');
            $table->integer('period_id');
            $table->integer('perm_id');
            $table->timestamps('create_at');
            $table->timestamps('updated_at');
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget');
    }
}
