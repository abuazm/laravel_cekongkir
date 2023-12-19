<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->string('type');
            $table->string('name');
            $table->string('postal_code');
            $table->timestamps();
        });
    }
    // public function up()
    // {
    //     //if (!Schema::hasTable('cities')) {
    //         Schema::create('cities', function (Blueprint $table) {
    //             $table->id();
    //             $table->bigInteger('code')->unsigned();
    //             $table->string('title');
    //             $table->bigInteger('province_code')->unsigned();
    //             $table->timestamps();
    //         });
    //     //}
        
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};
