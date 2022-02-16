<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->longText('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('email');
            $table->string('phone');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('check_in_time');
            $table->string('check_out_time');
            $table->string('no_of_adult');
            $table->string('no_of_children');
            $table->string('no_of_room');
            $table->string('room_type_1');
            $table->string('room_type_2')->nullable();
            $table->longText('instruction')->nullable();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
