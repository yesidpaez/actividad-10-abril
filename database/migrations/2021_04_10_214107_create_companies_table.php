<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // id PRIMARY KEY AUTO INCREMENTAL BIGINT
            $table-> string('name', 45 );
            $table-> string('anddress', 45 );
            $table-> string('nit', 45 );
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
        Schema::dropIfExists('companies');
    }
}
