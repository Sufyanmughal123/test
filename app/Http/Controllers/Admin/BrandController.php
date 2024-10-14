<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BrandServices;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 * @return \Illuminate\Http\Response
 */


/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 * @return \Illuminate\Http\Response
 */


class BrandController extends Controller
{


    public function __construct(BrandServices $BrandServices)
    {
        $this->BrandServices = $BrandServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (!Gate::allows('Brand_index')) {
//            return abort(503);
//        }
        return view('admin.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = $this->BrandServices->create();
        return view('admin.brand.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=100,height=500',
//        ]);
        $this->BrandServices->store($request);
        Session::flash('flash_message_sucess', 'Brand  create Successfully!!!.');

        return redirect()->route('admin.brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.brand.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = $this->BrandServices->create();
        $brand = $this->BrandServices->edit($id);
        return view('admin.brand.edit', compact('brand', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = $this->BrandServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Brand  Update Successfully!!!.');

        return redirect()->route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->BrandServices->destroy($id);
        Session::flash('flash_message_sucess', 'Brand  Delete Successfully!!!.');
        return redirect()->route('admin.brands.index');

    }

    public function getdata()
    {
        return $this->BrandServices->getdata();
    }
}
