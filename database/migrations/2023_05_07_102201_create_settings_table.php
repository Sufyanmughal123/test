<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_reception_no')->nullable();
            $table->string('site_mobile_no')->nullable();
            $table->string('site_icons')->nullable();
            $table->string('site_Delivery')->nullable();
            $table->string('site_working_hours')->nullable();
            $table->string('facebook_icon')->nullable();
            $table->string('insta_icon')->nullable();
            $table->string('twitter_icon')->nullable();
            $table->string('linkedin_icon')->nullable();
            $table->string('get_in_touch')->nullable();
            $table->string('head_office')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
