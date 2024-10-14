<?php

namespace App\Services;


use App\Models\JobsApply;
use Config;
use DataTables;

use Illuminate\Support\Str;
use App\Models\Job;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gate;

class JobServices
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

//        if ($request->hasfile('cv')) {
//            $file = $request->file('cv');
//            $filenameWithExt = $file->getClientOriginalName();
//            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
//            $filename = preg_replace("/\s+/", '-', $filename);
//            $extension = $file->getClientOriginalExtension();
//            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//            $destinationPath = 'dist/cv';
//            $file->move($destinationPath, $fileNameToStore);
//            $data['cv'] = $destinationPath . '/' . $fileNameToStore;
//        }

        return Job::create($data);
    }

    public function show($id)
    {
        $city = Job::find($id);
        return $city;
    }


    public function getdata()
    {
        $data = Job::select('*')->orderBy('id', 'desc');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.jobs.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.jobs.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.jobs.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function applied()
    {
        $data = JobsApply::select('*')->orderBy('id', 'desc');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href=" ' . route("admin.jobs.applied.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . '<a target="_blank" href="/'. $row->cv.'">  <i class="fas fa-download"></i> </a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function applied_show($id)
    {
        return JobsApply::find($id);
    }

    public function edit($id)
    {
        return Job::find($id);
    }

    public function update($request, $id)
    {
        $blog = Job::find($id);

        $data = $request->all();

        $blog->update($data);
        return $blog;
    }

    public function destroy($id)
    {
        $Country = Job::findOrFail($id);
        if ($Country)
            $Country->delete();

    }
}
