<?php

use App\Models\HotelApartment;
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
        Schema::create('hotel_apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('city_id')->nullable()->constrained('cities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('district_id')->nullable()->constrained('districts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('stars')->nullable();
            $table->string('rooms')->nullable();
            $table->decimal('price')->nullable();
            $table->enum('typing_live', HotelApartment::TYPINGLIVE)->nullable();
            $table->enum('type', HotelApartment::TYPE)->nullable();
            $table->enum('status', StaticConst::STATUS)->default('Active');
            $table->integer('sort')->nullable();
            $table->point('location')->nullable();
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
        Schema::dropIfExists('hotel_apartments');
    }
};
