<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->enum('role', ['1', '2'])->comment = '1 admin, 2 users';
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('active')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
		
		DB::table('users')->insert([
			'role' => '1',
			'fname' => 'Anju',
			'lname' => 'Batta',
			'email' => 'admin@admin.com',
			'password' => Hash::make('123456'),
			'image' => 'avtar.png',
			'active' => '1',
		]);
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
