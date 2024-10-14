<?php

namespace App\Services;

use App\Models\Blog;
use Config;
use App\Models\Country;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class BlogServices
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
//        return Blog::pluck('country_name', 'id');

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
            $destinationPath = 'dist/image';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $data['slug'] = Str::slug($request->name);

        return Blog::create($data);
    }

    public function show($id)
    {
        $city = Blog::find($id);
        return $city;
    }


    public function getdata()
    {
        $data = Blog::select('*')->orderBy('id', 'desc');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.blogs.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.blogs.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.blogs.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
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
        return Blog::find($id);
    }

    public function update($request, $id)
    {
        $blog = Blog::find($id);

        $data = $request->all();
//        $data['image']="dist/Profile/defualt.png";
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/image';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $blog->update($data);
        return $blog;
    }

    public function destroy($id)
    {
        $Country = Blog::findOrFail($id);
        if ($Country)
            $Country->delete();

    }
}
