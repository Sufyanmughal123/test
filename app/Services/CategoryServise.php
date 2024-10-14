<?php

namespace App\Services;


use Config;
use App\Models\Category;
use App\Models\Sub_Category;
use DataTables;

class CategoryServise
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
        return Category::all();
    }

    public function dropdown()
    {
        return Category::pluck('name', 'id');
    }

    public function subdropdown($id)
    {
        return Sub_Category::where('cat_id', $id)->pluck('name', 'id');
    }

    public function create()
    {


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
        return Category::create($data);

    }

    public function getdata()
    {
        $data = Category::select('id', 'name', 'slug')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.categorys.destroy", $row->id) . '"> ';
//                $btn = $btn . '<a href=" ' . route("admin.categorys.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.categorys.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
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
        return Category::find($id);

    }


    public function update($request, $id)
    {
        $Category = Category::find($id);
        $Category->name = $request->name;
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
        $Category->save();
    }

    public function destroy($id)
    {
        $Category = Category::find($id);
        if ($Category) {
            $Category->delete();
        }
    }
}
