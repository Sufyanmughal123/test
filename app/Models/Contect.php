<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contect extends Model
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    use HasFactory;

    protected $table = "contect_form";
    protected $fillable = ['name', 'email', 'number', 'text'];

}
