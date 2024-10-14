<?php

namespace App\Services;

use App\Models\City;
use Config;
use App\Models\Subcriber;
use DataTables;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Warning;
use Spatie\Permission\Models\Role;

class SubcriberServices
{

    public function index()
    {

    }


    public function create()
    {

    }

    public function store($request)
    {
        $data = $request->all();

        return Subcriber::create($data);
    }

    public function show($id)
    {
        $Subcriber = Subcriber::find($id);
        return $Subcriber;
    }


    public function getdata()
    {
        $data = Subcriber::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.subscriber.destroy", $row->id) . '"><div class="col-md-1"></div> ';
                $btn = $btn . '<a href=" ' . route("admin.subscriber.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.subscriber.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
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
        return Subcriber::find($id);


    }

    public function update($request, $id)
    {
        $Subcriber = Subcriber::find($id);

        $data = $request->all();
        $Subcriber->update($data);
        return $Subcriber;
    }

    public function destroy($id)
    {
        $Subcriber = Subcriber::findOrFail($id);
        if ($Subcriber)
            $Subcriber->delete();

    }
}
