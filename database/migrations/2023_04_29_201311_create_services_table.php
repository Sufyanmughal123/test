<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description')->nullable();

            $table->text('section1_heading')->nullable();
            $table->text('section1_description')->nullable();
            $table->string('section1_image')->nullable();

            $table->string('category')->nullable();
            //section 2
            $table->text('how_it_works_banner')->nullable();

            $table->string('section3_heading')->nullable();
            $table->text('section3_description')->nullable();
            $table->text('section3_list')->nullable();
            $table->string('section3_image')->nullable();
            $table->text('section3_right')->nullable()->comment('json save ids for show servise dropdown for otherservise');

            $table->string('section4_heading')->nullable();
            $table->text('section4_short')->nullable();
            $table->string('section4_image')->nullable();
            $table->text('section4_description')->nullable();


            $table->string('section5_heading')->nullable();
            $table->text('section5_description_before')->nullable();
            $table->string('section5_image')->nullable();
            $table->text('section5_description_after')->nullable();

            $table->string('section6_heading')->nullable();
            $table->text('section6_left_text')->nullable();
            $table->text('section6_left_right')->nullable();


            $table->string('Image')->nullable();
            $table->string('logo')->nullable();
            $table->string('status')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();

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
        Schema::dropIfExists('services');
    }
}
