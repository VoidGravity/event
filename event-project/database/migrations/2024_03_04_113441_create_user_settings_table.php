<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     protected $connection = 'mongodb';

    public function up()
    {
        Schema::connection($this->connection)->create('user_settings', function (Blueprint $table) {
            $table->id();
            //autoResetvation
            $table->foreignId('user_id')->constrained();
            $table->boolean('autoResetvation')->default(false);
            $table->boolean('autoApprouval')->default(false);
            $table->boolean('autoCreation')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->dropIfExists('user_settings');

    }
}
