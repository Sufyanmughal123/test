<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Degree extends Model
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    use HasFactory;

    protected $fillable=['country_id','degree_level','specialization','duration','featured','city_id','university_id','slug','name','description','meta_title','meta_description','image'];


}
