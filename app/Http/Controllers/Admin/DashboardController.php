<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Subcriber;
use App\Models\User;
/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 */
class DashboardController extends Controller
{
    public function index()
    {

        $Service = Service::get()->count();
        $Brand = Brand::get()->count();
        $Gallery = Gallery::get()->count();
        $User = User::get()->count();
        $Subcriber = Subcriber::get()->count();
        return view('admin.dashboard', compact('Service', 'Brand', 'Gallery', 'User', 'Subcriber'));

    }
}
