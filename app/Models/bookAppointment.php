<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookAppointment extends Model
{
    use HasFactory;
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    protected $table = "book_appoinment";
    protected $fillable = ['name', 'email', 'number', 'date', 'time', 'text'];

}
