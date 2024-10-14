<?php

namespace App\Services;

use App\Models\bookAppointment;
use App\Models\Brand;
use App\Models\Contect;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Subcriber;
use Config;
use DataTables;
use Spatie\Permission\Models\Role;

class CountryServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {

    }

    public function apiindex()
    {
        return Country::all();

    }

    public function getbrands()
    {
        return Country::with('brand')->get();

    }

    public function getbrand($slug)
    {

        $data = Brand::where('slug', $slug)->first();
        if ($data) {
            return $data;
        } else {
            return 0;
        }

    }

    public function gallery()
    {

        return Gallery::select('*')->orderBy('id', 'desc')->get();
    }

    public function booking($request)
    {
        $data = $request->all();

        return bookAppointment::create($data);

    }

    public function Conect($request)
    {

//        $data = $request->all();



        return Contect::create($data);

    }

    public function subcribe($request)
    {

        $data = $request->all();
        $data['email'] = $request->emailsubcriber;
        return Subcriber::create($data);

    }

    public function create()
    {

        return Role::all();
    }

    public function store($request)
    {
        $data = $request->all();
        return Country::create($data);
    }

    protected static function saveFile($file_data, $path): string
    {

        if (!is_dir(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }
        $file = $file_data;

        $name = round(microtime(true) * 10000) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $name);
        return $path . '/' . $name;
    }

    public function user_deactive($id)
    {
        $user = Country::find($id);
        if ($user) {
            $user->active = 0;
            $user->save();
        }
    }

    public function user_data($slug)
    {

        return $user = User::where('slug', $slug)->first();

    }

    public function user_active($id)
    {
        $user = Country::find($id);
        if ($user) {
            $user->active = 1;
            $user->save();
        }

    }

    public function getdata()
    {
        $data = Country::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.country.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.country.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.country.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick="if ( confirm(' . "'Are you sure you want to Delete this?'" . ') ) { document.getElementById(`delet_' . $row->id . '`).submit()}"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Country::find($id);


    }

    public function update($request, $id)
    {
        $country = Country::find($id);
        $data = $request->all();
        $country->update($data);
        return $country;
    }

    public function destroy($id)
    {
        $Country = Country::findOrFail($id);
        if ($Country)
            $Country->delete();

    }
}
