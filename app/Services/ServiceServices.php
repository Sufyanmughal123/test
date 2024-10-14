<?php

namespace App\Services;


use App\Models\Service;
use Config;
use DataTables;
use Illuminate\Support\Str;

class ServiceServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */

    public function index() {}


    public function create()
    {
        return Service::all();
    }

    public function store($request)
    {
        
        $data = new Service();
        $data->name = $request->name;
        $data->short_descrition = $request->short_descrition;
        $data->category = $request->category;
        $data->slug = Str::slug($request->slug);
        $data->section_1 = $request->section_1 ?? '';
        $data->section_2 = $request->section_2 ?? '';
        $data->section_3 = $request->section_3 ?? '';
        $data->section_4 = $request->section_4 ?? '';
        $data->section_5 = $request->section_5 ?? '';
        $data->section_6 = $request->section_6 ?? '';
        $data->section_7 = $request->section_7 ?? '';
        $data->section_8 = $request->section_8 ?? '';
        $data->section_9 = $request->section_9 ?? '';
        $data->save();

        //        dd($data);

        //        return Service::create($data);
    }

    public function show($id)
    {
        $service = Service::find($id);
        return $service;
    }


    public function getdata()
    {
        $data = Service::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.services.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.services.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.services.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
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
        return Service::find($id);
    }

    public function update($request, $id)
    {
        $data = Service::find($id);

        $data->name = $request->name;
        $data->short_descrition = $request->short_descrition;
        $data->slug = Str::slug($request->slug);
        $data->category = $request->category;
        $data->meta_title = $request->meta_title ?? '';
        $data->meta_description = $request->meta_description ?? '';
        $data->section_1 = $request->section_1 ?? '';
        $data->section_2 = $request->section_2 ?? '';
        $data->section_3 = $request->section_3 ?? '';
        $data->section_4 = $request->section_4 ?? '';
        $data->section_5 = $request->section_5 ?? '';
        $data->section_6 = $request->section_6 ?? '';
        $data->section_7 = $request->section_7 ?? '';
        $data->section_8 = $request->section_8 ?? '';
        $data->section_9 = $request->section_9 ?? '';
        $data->save();
        return $data;
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if ($service)
            $service->delete();
    }
}
