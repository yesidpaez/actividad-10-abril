<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id(); // id PRIMARY KEY AUTO INCREMENTAL BIGINT
            $table-> string('name', 45 );
            $table-> string('anddress', 45 );
            $table-> string('phones', 45 );
            $table-> string('nit', 45 );
            $table-> string('owner_name', 45 );
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
        Schema::dropIfExists('stores');
    }
}
