<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestPhotographyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_photography', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('purchase_type');
            $table->decimal('total_sum',12,2);
            $table->string('guest_note');
            $table->unsignedBigInteger('guest_id');
            $table->foreign('guest_id')->references('id')->on('guests')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('photography_id');
            $table->foreign('photography_id')->references('id')->on('photographies')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('guest_photography');
    }
}
