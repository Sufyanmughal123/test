<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class page extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    protected $fillable = ['name','slug', 'meta_title', 'meta_description', 'descripiton', 'service_page','heros_ection','form_section','banner_image','image', 'status'];

    protected $table = "pages";



}


