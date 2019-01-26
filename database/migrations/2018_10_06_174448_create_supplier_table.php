<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->string('fax');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('note');
            $table->string('debit')->default(0);
            $table->string('credit')->default(0);
            $table->string('balance')->default(0);
            $table->string('state')->default(0);
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
        Schema::dropIfExists('supplier');
    }
}
