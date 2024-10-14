<?php

namespace App\Services;

use App\Models\File;
use Config;
use DataTables;

/**
 * Display a listing of the resource.
 * created by  saima
 *
 */
class FileServices
{

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
            $destinationPath = 'dist/files';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;


        }
        if ($request->hasfile('image_main')) {
            $file = $request->file('image_main');

            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/files';
            $file->move($destinationPath, $fileNameToStore);
            $data['image_main'] = $destinationPath . '/' . $fileNameToStore;


        }

        File::create($data);

    }

    public function show($id)
    {
        $city = File::find($id);
        return $city;
    }


    public function getdata($request)
    {
        $data = File::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.files.destroy", $row->id) . '"><div class="col-md-1"></div> ';
//                $btn = $btn . '<a href=" ' . route("admin.gallery.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.files.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('image', function ($row) {
//                $btn = '   <img src="' . asset($row->image) . '" width="200px;" /> ';

                return '/' . $row->image;
            })->addColumn('link', function ($row) {
                $btn = '<a target="_blank" href="' . asset($row->image) . '" width="200px;" >link </a> ';

                return $btn;
            })
            ->rawColumns(['action', 'image', 'link'])
            ->make(true);
    }

    public function edit($id)
    {

        return File::find($id);


    }

    public function update($request, $id)
    {
        $Gallery = File::find($id);

        $data = $request->all();
//        $data['image']="dist/Profile/defualt.png";
        $fileNameToStore = null;

        if ($request->hasfile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
                $filename = preg_replace("/\s+/", '-', $filename);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $destinationPath = 'dist/files';
                $file->move($destinationPath, $fileNameToStore);
                $data['image'] = $destinationPath . '/' . $fileNameToStore;

            }
        }
        if ($request->hasfile('image_main')) {
            $file = $request->file('image_main');

            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/files';
            $file->move($destinationPath, $fileNameToStore);
            $data['image_main'] = $destinationPath . '/' . $fileNameToStore;


        }
        $Gallery->update($data);
        return $Gallery;
    }

    public function destroy($id)
    {
        $Gallery = File::findOrFail($id);
        if ($Gallery)
            $Gallery->delete();

    }
}
