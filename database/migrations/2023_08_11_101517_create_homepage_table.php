<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('section_1_heading_left')->nullable();
            $table->string('section_1_image')->nullable();
            $table->string('section_1_image_background')->nullable();
            $table->string('section_1_heading_right')->nullable();
            $table->string('section_1_description_right')->nullable();
            $table->text('section_2_servise_logo')->comment('select 6 servise json')->nullable();
            $table->text('section_3_brands_logo')->comment('select 4 servise json')->nullable();


            $table->text('section_4_title1')->comment('section 4 title 1')->nullable();
            $table->text('section_4_image1')->comment('section 4 image 1')->nullable();
            $table->text('section_4_description1')->comment('section 4  description 1')->nullable();

            $table->text('section_4_title2')->comment('section 4 title 2')->nullable();
            $table->text('section_4_image2')->comment('section 4 image 2')->nullable();
            $table->text('section_4_description2')->comment('section 4 description 2')->nullable();

            $table->text('section_4_title3')->comment('section 4 title 3')->nullable();
            $table->text('section_4_image3')->comment('section 4 image 3')->nullable();
            $table->text('section_4_description3')->comment('section 4 description 3')->nullable();

            $table->text('section_5_text')->comment('section_5_text')->nullable();

            $table->text('gallery')->comment('select galery images')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('homepage');
    }
}
