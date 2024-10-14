<?php

namespace App\Services;

use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Home;
use App\Models\page;
use App\Models\SplashPopUp;
use App\Models\Service;
use Config;
use DataTables;

class PageServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */

    public function index()
    {
        return Service::all();

    }

    public function apiResponce($status = 1, $method = 'POST', $message = '', $data = [])
    {
        $response = [
            'status' => $status,
            'method' => $method,
            'message' => $message,
            'response' => $data
        ];
        return $response;
    }

    public function about()
    {
        return Page::where('name', 'About')->first();
    }

    public function homeedit()
    {
        $data['splash'] = SplashPopUp::where('status', 1)->first();
        $data['home'] = Home::find(1);
        $data['services'] = Service::select('id', 'name')->get();
        $data['brands'] = Brand::select('id', 'name')->get();

        return $data;
    }

    public function homeeupdate($request)
    {
        $data1 = Home::find(1);
        $data1->name = $request->name;
        $data1->section_1_heading_left = $request->section_1_heading_left;
        $data1->section_1_image = $request->section_1_image;
        $data1->section_1_image_background = $request->section_1_image_background;
        $data1->section_1_heading_right = $request->section_1_heading_right;
        $data1->section_1_description_right = $request->section_1_description_right;
        $data1->section_2_servise_logo = $request->section_2_servise_logo;
        $data1->section_3_brands_logo = $request->section_3_brands_logo;
        $data1->section_4_title1 = $request->section_4_title1;
        $data1->section_4_description1 = $request->section_4_description1;
        $data1->section_4_title2 = $request->section_4_title2;
        $data1->update();


////        dd($data,$request);
//
//        $data = $request->all();
//        // section desk
//        $data['section_1_heading_left'] = $request->section_1_heading_left;
//        // section mbl
//        $data['section_1_image'] = $request->section_1_image;
////services
//
//        //
//        $data['section_1_image_background'] = $request->section_1_image_background;
////slider
//
//
//        $data['section_1_heading_right'] = $request->section_1_heading_right;
//
//        //4 section
//        $data['section_1_description_right'] = $request->section_1_description_right;
//
////5 section
//        $data['section_1_description_right'] = $request->section_1_description_right;
//        $data['section_2_servise_logo'] = $request->section_2_servise_logo;
//
//
////        if ($request->hasfile('section_4_image1')) {
////            $file = $request->file('section_4_image1');
////            $extension = $file->getClientOriginalExtension();
////            $fileNameToStore = 'section_4_image1' . '_' . time() . '.' . $extension;
////            $destinationPath = 'dist/home';
////            $file->move($destinationPath, $fileNameToStore);
////            $data['section_4_image1'] = $destinationPath . '/' . $fileNameToStore;
////        }
////        if ($request->hasfile('section_4_image2')) {
////            $file = $request->file('section_4_image2');
////            $extension = $file->getClientOriginalExtension();
////            $fileNameToStore = 'section_4_image2' . '_' . time() . '.' . $extension;
////            $destinationPath = 'dist/home';
////            $file->move($destinationPath, $fileNameToStore);
////            $data['section_4_image2'] = $destinationPath . '/' . $fileNameToStore;
////        }
////        if ($request->hasfile('section_4_image3')) {
////            $file = $request->file('section_4_image3');
////            $extension = $file->getClientOriginalExtension();
////            $fileNameToStore = 'section_4_image3' . '_' . time() . '.' . $extension;
////            $destinationPath = 'dist/home';
////            $file->move($destinationPath, $fileNameToStore);
////            $data['section_4_image3'] = $destinationPath . '/' . $fileNameToStore;
////        }
//        $data['section_2_servise_logo'] = json_encode($request->section_2_servise_logo);
//        $data['section_3_brands_logo'] = json_encode($request->section_3_brands_logo);
//
//        $data1->update($data);
//        return $data;
    }

    public function contect()
    {
        return Page::where('name', 'Contect')->first();
    }


    public function getdata()
    {
//        return DataTables::of(Permission::query())->make(true);
        $data = page::orderBy('id', 'desc');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('main', function ($row) {
                $btn = ($row->main == 1) ? 'Main' : "-";

                return $btn;
            })
            ->rawColumns(['main'])
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.pages.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.pages.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.pages.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store($request)
    {
        $data = $request->all();
        $Page=  new page();
        $Page->section_1 = $request->section_1;
        $Page->section_2 = $request->section_2;
        $Page->section_3 = $request->section_3;
        $Page->section_4 = $request->section_4;
        $Page->section_5= $request->section_5;
        $Page->section_6= $request->section_6;
        $Page->section_7= $request->section_7;
        $Page->section_8= $request->section_8;
        $Page->save();

    }

    public function edit($id)
    {
        return page::findOrFail($id);
    }

    public function pageeupdate($request, $id)
    {
        $Page = page::find($id);
        $Page->name = $request->name;
        $Page->meta_title = $request->meta_title;
        $Page->meta_description = $request->meta_description;
        $Page->descripiton = $request->descripiton;

        $Page->save();
    }

    public function update($request, $id)
    {
        $Page = page::find($id);
        $Page->name = $request->name;
        $Page->meta_title = $request->meta_title;
        $Page->meta_description = $request->meta_descripiton;
        $Page->section_1 = $request->section_1;
        $Page->section_2 = $request->section_2;
        $Page->section_3 = $request->section_3;
        $Page->section_4 = $request->section_4;
        $Page->section_5= $request->section_5;
        $Page->section_6= $request->section_6;
        $Page->section_7= $request->section_7;
        $Page->section_8= $request->section_8;
//        $Page->save();
        $Page->update();
    }

    public function destroy($id)
    {
        $Page = page::findOrFail($id);
        if ($Page)
            $Page->delete();

    }
}
