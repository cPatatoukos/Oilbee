<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');	            
            $table->string('category');
            $table->string('name');
            $table->longText('description');	
            $table->decimal('price', 13, 2);	
            $table->integer('discount')->nullable();
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->decimal('price2', 13, 2);	
            $table->decimal('price3', 13, 2);
            $table->string('image');
            $table->rememberToken();
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
        Schema::dropIfExists('products');
    }
}
