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
            $table->id(); // id PRIMARY KEY AUTO INCREMENTAL BIGINT
            $table-> string('name', 45 );
            $table->double('amount', 8, 2);
            $table-> string('productscol', 45 );
            $table->timestamps(); // created_at, updated_at -> timestamps
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
