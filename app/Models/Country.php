<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    use HasFactory;
    use HasFactory, SoftDeletes;

    protected $table = 'countries';


    protected $fillable = ['country_name', 'country_description', 'meta_title', 'meta_description', 'image', 'slug', 'status'];


    public function Brand()
    {
        return $this->hasMany(Brand::class, 'country_id');
    }

}
