<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixedDistributionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_distribution', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('source_budget_id');
          $table->integer('target_budget_id');
          $table->integer('user_id');
          $table->float('amount');
          $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
          $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
          $table->timestamps('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixed_distribution');
    }
}
