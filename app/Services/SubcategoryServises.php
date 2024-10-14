<?php

namespace App\Services;

use Config;
use App\Models\Sub_Category;
use App\Models\Category;
use DataTables;

class SubcategoryServises
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
        return Sub_Category::with('cat_name')->get();
    }

    public function create()
    {
        return Category::select('id', 'name')->get();
    }

    public function subcategory($request)
    {
        $html = "<option>Select Option</option>";
        $subcat = Sub_Category::where('cat_id', $request->cat)->get();
        foreach ($subcat as $item) {
            $html = $html . "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return $html;
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
            $destinationPath = 'dist/subcategory';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;

        }
        Sub_Category::create($data);
    }

    public function getdata()
    {
        $data = Sub_Category::select('id', 'name', 'slug', 'cat_id')->with('cat_name')->get();

        return Datatables::of($data)->addIndexColumn()
            ->addColumn('category', function ($row) {
                if ($row->cat_name) {
                    return $row->cat_name->name;
                } else {
                    return "N/A";
                }
            })
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.sub_categorys.destroy", $row->id) . '"> ';
//                $btn = $btn . '<a href=" ' . route("admin.sub_categorys.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.sub_categorys.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action', 'category'])
            ->make(true);
    }

    public function edit($id)
    {
        return Sub_Category::find($id);
    }

    public function update($request, $id)
    {
        $Sub_Category = Sub_Category::find($id);
        $Sub_Category->name = $request->name;
        $Sub_Category->cat_id = $request->cat_id;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/subcategory';
            $file->move($destinationPath, $fileNameToStore);
            $Sub_Category->image = $destinationPath . '/' . $fileNameToStore;

        }
        $Sub_Category->save();
    }

    public function destroy($id)
    {
        $Sub_Category = Sub_Category::find($id);
        if ($Sub_Category) {
            $Sub_Category->delete();
        }
    }
}
