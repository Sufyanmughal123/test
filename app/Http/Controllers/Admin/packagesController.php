<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PackagesServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class packagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PackagesServices $PackagesServices)
    {
        $this->PackagesServices = $PackagesServices;
    }

    public function index()
    {
        return view('admin.packages.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->PackagesServices->store($request);
        Session::flash('flash_message_sucess', 'Package  create Successfully!!!.');

        return redirect()->route('admin.packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = $this->PackagesServices->edit($id);
        return view('admin.packages.edit', compact('package'));
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
        $package = $this->PackagesServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Package  Update Successfully!!!.');
        return redirect()->route('admin.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = $this->PackagesServices->destroy($id);
        Session::flash('flash_message_sucess', 'Package  Delete Successfully!!!.');

        return redirect()->route('admin.packages.index');
    }

    public function getdata()
    {
        return $this->PackagesServices->getdata();
    }

    public function packages_page()
    {
        $data = $this->PackagesServices->page();

        return view('admin.packages.page', compact('data'));
    }

    public function packages_page_save(Request $request)
    {

        $this->PackagesServices->page_update($request);
        Session::flash('flash_message_sucess', 'Package  page update Successfully!!!.');
        return redirect()->back();
    }
}
