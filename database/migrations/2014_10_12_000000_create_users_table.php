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
            $table->string('name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('access_token')->nullable();
            $table->enum('user_role',['admin','user'])->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('avatar')->nullable();
            $table->string('otp')->nullable();
            $table->tinyInteger('is_otp_verified')->default(false);
            $table->enum('invite_from',['web','app'])->default('web');
            $table->tinyInteger('status')->default(false);
            $table->rememberToken();
            $table->dateTime('register_at')->nullable();
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
