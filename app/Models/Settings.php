<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    use HasFactory;
    protected $table = "settings";
    protected $fillable = ['title', 'long_description', 'short_description','map', 'text', 'alt_text_image', 'mbl_image',
        'desktop_image','video ','status','icons','background_image'];


}
