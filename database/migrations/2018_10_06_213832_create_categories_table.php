<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('serail_number');
            $table->string('name');
            $table->string('item_id')->nullable();
            $table->string('size')->nullable();
            $table->string('source')->nullable();
            $table->string('place_found')->nullable();
            $table->string('company_created')->nullable();
            $table->string('catogry_color')->nullable();
            $table->string('country_created')->nullable();
            $table->string('type')->nullable();
            $table->string('modal')->nullable();
            $table->string('production_date')->nullable();
            $table->string('production_end_date')->nullable();
            
            $table->string('unit_one_name')->nullable();
            $table->string('unit_one_barcode')->nullable();
            $table->string('unit_one_default');
            $table->integer('unit_one_max_limit')->nullable();
            $table->integer('unit_one_min_limit')->nullable();
            $table->integer('unit_one_request_limit')->nullable();
            
            $table->string('unit_tow_name')->nullable();
            $table->string('unit_tow_barcode')->nullable();
            $table->integer('unit_tow_factor_converter')->nullable();
            $table->string('unit_tow_default');
            $table->integer('unit_tow_max_limit')->nullable();
            $table->integer('unit_tow_min_limit')->nullable();
            $table->integer('unit_tow_request_limit')->nullable();
            
            $table->string('unit_three_name')->nullable();
            $table->string('unit_three_barcode')->nullable();
            $table->integer('unit_three_factor_converter')->nullable();
            $table->string('unit_three_default');
            $table->integer('unit_three_max_limit')->nullable();
            $table->integer('unit_three_min_limit')->nullable();
            $table->integer('unit_three_request_limit')->nullable();
            
            $table->integer('unit_one_price_jumla')->nullable();
            $table->integer('unit_one_price_half_jumla')->nullable();
            $table->integer('unit_one_price_disterbuted')->nullable();
            $table->integer('unit_one_price_export')->nullable();
            $table->integer('unit_one_price_peices')->nullable();
            $table->integer('unit_one_price_consumer')->nullable();
            $table->integer('unit_one_price_default')->nullable();

            $table->integer('unit_tow_price_jumla')->nullable();
            $table->integer('unit_tow_price_half_jumla')->nullable();
            $table->integer('unit_tow_price_disterbuted')->nullable();
            $table->integer('unit_tow_price_export')->nullable();
            $table->integer('unit_tow_price_peices')->nullable();
            $table->integer('unit_tow_price_consumer')->nullable();
            $table->integer('unit_tow_price_default')->nullable();

            $table->integer('unit_three_price_jumla')->nullable();
            $table->integer('unit_three_price_half_jumla')->nullable();
            $table->integer('unit_three_price_disterbuted')->nullable();
            $table->integer('unit_three_price_export')->nullable();
            $table->integer('unit_three_price_peices')->nullable();
            $table->integer('unit_three_price_consumer')->nullable();
            $table->integer('unit_three_price_default')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
