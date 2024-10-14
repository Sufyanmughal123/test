<?php

namespace App\Services;


use App\Models\Brand;
use App\Models\Country;
use Config;
use DataTables;

class BrandServices
{

    public function index()
    {

    }

    public function apiindex()
    {
        return Brand::all();
    }

    public function dropdown()
    {
        return Brand::pluck('name', 'id');
    }

    public function subdropdown($id)
    {
        return Brand::where('cat_id', $id)->pluck('name', 'id');
    }

    public function create()
    {
        return Country::all();

    }

    public function store($request)
    {

        $data = $request->all();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }

        if ($request->hasfile('section1_image')) {
            $file = $request->file('section1_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_image';
            $file->move($destinationPath, $fileNameToStore);
            $data['section1_image'] = $destinationPath . '/' . $fileNameToStore;
        }
        if ($request->hasfile('section2_image')) {
            $file = $request->file('section2_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_image';
            $file->move($destinationPath, $fileNameToStore);
            $data['section2_image'] = $destinationPath . '/' . $fileNameToStore;

        }

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_logo';
            $file->move($destinationPath, $fileNameToStore);
            $data['logo'] = $destinationPath . '/' . $fileNameToStore;

        }

        return Brand::create($data);

    }

    public function getdata()
    {
        $data = Brand::select('id', 'name', 'slug')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.brands.destroy", $row->id) . '"> ';
//                $btn = $btn . '<a href=" ' . route("admin.categorys.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.brands.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Brand::find($id);

    }


    public function update($request, $id)
    {
        $data = $request->all();

        $Brand = Brand::find($id);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_logo';
            $file->move($destinationPath, $fileNameToStore);
            $data['logo'] = $destinationPath . '/' . $fileNameToStore;

        }
        if ($request->hasfile('section1_image')) {
            $file = $request->file('section1_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_image';
            $file->move($destinationPath, $fileNameToStore);
            $data['section1_image'] = $destinationPath . '/' . $fileNameToStore;
        }
        if ($request->hasfile('section2_image')) {
            $file = $request->file('section2_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/banner_image';
            $file->move($destinationPath, $fileNameToStore);
            $data['section2_image'] = $destinationPath . '/' . $fileNameToStore;

        }


        $Brand->update($data);
    }

    public function destroy($id)
    {
        $Brand = Brand::find($id);
        if ($Brand) {
            $Brand->delete();
        }
    }



}
