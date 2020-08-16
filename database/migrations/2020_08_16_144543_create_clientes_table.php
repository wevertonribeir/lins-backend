<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('public_place');
            $table->string('number', 20);
            $table->string('complement');
            $table->string('zip_code', 10);
            $table->string('neighborhood', 50);
            $table->string('city', 50);
            $table->char('federated_unit', 2);
            $table->unsignedBigInteger('user');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_user_foreign');
        });
        Schema::dropIfExists('clientes');
    }
}
