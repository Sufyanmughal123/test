<?php

namespace App\Services;

use App\Models\Gallery;
use Config;
use DataTables;

/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 */
class GalleryServices
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
            $files = $request->file('image');
            foreach ($files as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
                $filename = preg_replace("/\s+/", '-', $filename);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $destinationPath = 'dist/image';
                $file->move($destinationPath, $fileNameToStore);
                $data['image'] = $destinationPath . '/' . $fileNameToStore;
                Gallery::create($data);
            }
        }


    }

    public function show($id)
    {
        $city = Gallery::find($id);
        return $city;
    }


    public function getdata($request)
    {
        $data = Gallery::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.gallery.destroy", $row->id) . '"><div class="col-md-1"></div> ';
//                $btn = $btn . '<a href=" ' . route("admin.gallery.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.gallery.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('image', function ($row) {
//                $btn = '   <img src="' . asset($row->image) . '" width="200px;" /> ';

                return '/'.$row->image;
            })->addColumn('link', function ($row) {
                $btn = '<a target="_blank" href="' . asset($row->image) . '" width="200px;" >link </a> ';

                return $btn;
            })
            ->rawColumns(['action', 'image','link'])
            ->make(true);
    }

    public function edit($id)
    {

        return Gallery::find($id);


    }

    public function update($request, $id)
    {
        $Gallery = Gallery::find($id);

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

        $Gallery->update($data);
        return $Gallery;
    }

    public function destroy($id)
    {
        $Gallery = Gallery::findOrFail($id);
        if ($Gallery)
            $Gallery->delete();

    }
}
