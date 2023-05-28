<?php

use App\Models\PublicTransportationCity;
use App\Models\StaticConst;
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
    public function up()
    {
        Schema::create('public_transportation_cities', function (Blueprint $table) {
            $table->id();
            $table->decimal('price')->nullable();
            $table->enum('type', PublicTransportationCity::TYPE)->nullable();
            $table->date('city_from')->nullable();
            $table->date('city_to')->nullable();
            $table->enum('status', StaticConst::STATUS)->default('Active');
            $table->integer('sort')->nullable();
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
        Schema::dropIfExists('public_transportation_cities');
    }
};
