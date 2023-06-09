<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//
            $table->string('email')->unique();//
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');//
            $table->rememberToken();
            $table->string('dni');//
            $table->string('phone');//
            $table->string('address');//
            $table->date('birthdate');//
            $table->string('photo_path1')->nullable();
            $table->string('photo_path2')->nullable();
            $table->string('photo_path3')->nullable();
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('users');
    }
}
