<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WebSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('sitetitle', 150)->nullable();;
            $table->string('logo', 100)->nullable();;
            $table->string('admin_email', 100)->nullable();;
            $table->string('support_email', 100)->nullable();;
            $table->string('company_address', 100)->nullable();
            $table->enum('maintenance_mode', ['0', '1'])->default(0);
            $table->enum('active', ['0', '1']);
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
        Schema::dropIfExists('settings');
    }
}
