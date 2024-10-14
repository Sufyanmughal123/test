<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Services\CityServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gate;

class CityController extends Controller
{

    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
        */

    public function __construct(CityServices $CityServices)
    {
        $this->CityServices = $CityServices;
    }

    public function index()
    {
        if (!Gate::allows('Citys_index')) {
            return abort(503);
        }
        return view('admin.city.index');
    }

    public function getdata()
    {
        return $this->CityServices->getdata();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('Citys_create')) {
            return abort(503);
        }
        $countries = $this->CityServices->create();

        return view('admin.city.create', compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CityServices->store($request);
        Session::flash('flash_message_sucess', 'City  create Successfully!!!.');

        return redirect()->route('admin.city.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = $this->CityServices->show($id);
        $countries = $this->CityServices->create();
        return view('admin.city.view', compact('city', 'countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('Citys_edit')) {
            return abort(503);
        }
        $city = $this->CityServices->show($id);
        $countries = $this->CityServices->create();

        return view('admin.city.edit', compact('city', 'countries'));

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
        $this->CityServices->update($request, $id);
        Session::flash('flash_message_sucess', 'City  Update Successfully!!!.');

        return redirect()->route('admin.city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('Citys_Delete')) {
            return abort(503);
        }
        $this->CityServices->destroy($id);
        Session::flash('flash_message_sucess', 'City  create Successfully!!!.');
        return redirect()->route('admin.city.index');

    }
}
