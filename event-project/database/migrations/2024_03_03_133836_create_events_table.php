<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('events', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();//done
            $table->decimal('price', 8, 2)->nullable();
            $table->string('title');//done
            $table->string('payment_methode')->nullable();
            $table->text('description')->nullable();//kind of done
            $table->dateTime('start_date');//done
            $table->string('location')->nullable();
            $table->string('capacity')->nullable(); //done
            $table->foreignId('user_id')->constrained();//done
            $table->foreignId('category_id')->constrained(); //done
            $table->dateTime('deleted_at')->nullable(); //done

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
        Schema::dropIfExists('events');
    }
}
