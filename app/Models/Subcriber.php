<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcriber extends Model
{
    use HasFactory;
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    protected $table = "subcriber";
    protected $fillable = ['email'];
}
