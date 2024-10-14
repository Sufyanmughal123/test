<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    protected $fillable = ['name', 'slug', 'country_id', 'section1_heading', 'section1_image', 'section1_description', 'section2_heading','section2_short_description','section2_image','section2_description', 'section3_heading', 'section3_description','meta_title', 'meta_description', 'keywords', 'logo'];


}
