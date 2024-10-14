<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('country_id');

            $table->string('section1_heading')->nullable();
            $table->string('section1_image')->nullable();
            $table->text('section1_description')->nullable();

            $table->string('section2_heading')->nullable();
            $table->string('section2_short_description')->nullable();
            $table->string('section2_image')->nullable();
            $table->text('section2_description')->nullable();
            $table->string('section3_heading')->nullable();
            $table->text('section3_description')->nullable();

            $table->string('logo')->nullable();
            $table->string('keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('brands');
    }
}
