<?php

namespace App\Services;

use App\Models\City;
use Config;
use App\Models\Country;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CityServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {

    }


    public function create()
    {
        return Country::pluck('country_name', 'id');

    }

    public function store($request)
    {
        $data = $request->all();
        if ($request->hasfile('banner_image'))
            $data['banner_image'] = $this->saveFile($request->banner_image, 'dist/cities/banner');
        if ($request->hasfile('tile_image'))
            $data['tile_image'] = $this->saveFile($request->tile_image, 'dist/cities/tile');

        return City::create($data);
    }
    public function show($id)
    {
        $city = City::find($id);
        return $city;
    }
    public function getdata()
    {
        $data = City::select('*')->orderBy('id', 'desc');
        dd($data);


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.city.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.city.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.city.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action', 'living_expense', 'working_hours'])
            ->make(true);
    }
    public function edit($id)
    {
        return Country::find($id);
    }
    public function update($request, $id)
    {
        $city = City::find($id);
        $data = $request->all();

        if ($request->hasfile('banner_image'))
            $data['banner_image'] = $this->saveFile($request->banner_image, 'dist/cities/banner');
        if ($request->hasfile('tile_image'))
            $data['tile_image'] = $this->saveFile($request->tile_image, 'dist/cities/tile');

        $city->update($data);
        return $city;
    }
    public function destroy($id)
    {
        $Country = City::findOrFail($id);
        if ($Country)
            $Country->delete();

    }
    protected static function saveFile($file_data, $path): string
    {

        if (!is_dir(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }
        $file = $file_data;

        $name = round(microtime(true) * 10000). '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $name);
        return $path.'/'.$name;
    }
}
