<?php

namespace App\Services;


use App\Models\Package;
use App\Models\page;
use Config;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackagesServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */

    public function index()
    {
        $data['Package'] = Package::all();
        $data['page'] = page::find(6);

        return $data;
    }


    public function create()
    {


    }

    public function store($request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        return Package::create($data);
    }

    public function show($id)
    {
        $Package = Package::find($id);
        return $Package;
    }


    public function getdata()
    {
        $data = Package::select('*')->orderBy('id', 'desc');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.packages.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.packages.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.packages.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Package::find($id);


    }

    public function page()
    {
        $page = page::find(6);

        if (!$page) {

            DB::table('pages')->insert(
                [
                    'name' => "packages",
                    'slug' => 'packages',
                    'heros_ection' => 'packages',
                    'form_section' => 'packages',
                    'service_page' => 'packages',
                    'meta_title' => 'packages',
                    'meta_description' => 'packages',
                ]);

            $page = page::find(6);
        }

        return $page;

    }

    public function page_update($request)
    {
        $page = page::find(6);
        $data = $request->all();
        $page->update($data);

    }

    public function update($request, $id)
    {
        $Package = Package::find($id);
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $Package->update($data);
        return $Package;
    }

    public function destroy($id)
    {
        $service = Package::findOrFail($id);
        if ($service)
            $service->delete();
    }
}
