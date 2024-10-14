<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = "homepage";

    protected $fillable = ['name', 'section_1_heading_left', 'section_1_image', 'section_1_image_background', 'section_1_heading_right', 'section_1_description_right', 'section_2_servise_logo', 'section_3_brands_logo', 'section_4_title1', 'section_4_image1', 'section_4_description1', 'section_4_title2', 'section_4_image2', 'section_4_description2', 'section_4_description2', 'section_4_title3', 'section_4_image3', 'section_4_description3', 'section_5_text', 'gallery', 'meta_title', 'meta_description'];
}
