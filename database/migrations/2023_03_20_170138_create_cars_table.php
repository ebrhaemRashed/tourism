<?php

use App\Models\Cars;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('city_id')->nullable()->constrained('cities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('district_id')->nullable()->constrained('districts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type', Cars::TYPE)->nullable();
            $table->integer('stars')->nullable();
            $table->integer('seats')->nullable();
            $table->decimal('price')->nullable();
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
        Schema::dropIfExists('cars');
    }
};
