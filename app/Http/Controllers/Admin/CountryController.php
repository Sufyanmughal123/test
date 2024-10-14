<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CountryServices;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 */
class CountryController extends Controller
{


    public function __construct(CountryServices $countryServices)
    {
        $this->CountryServices = $countryServices;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getdata()
    {
        return $this->CountryServices->getdata();

    }

    public function index()
    {
        if (!Gate::allows('Country_index')) {
            return abort(503);
        }
        return view('admin.country.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('Country_create')) {
            return abort(503);
        }
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'country_name' => 'required',
            'country_description' => 'required',

        ]);

        $this->CountryServices->store($request);
        Session::flash('flash_message_sucess', 'Country Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.country.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = $this->CountryServices->edit($id);
        if ($country)
            return view('admin.country.view', compact('country'));
        else
            return redirect()->route('admin.country.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('Country_edit')) {
            return abort(503);
        }
        $country = $this->CountryServices->edit($id);
        if ($country)
            return view('admin.country.edit', compact('country'));
        else
            return redirect()->route('admin.country.index');
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
        $this->validate($request, [
            'country_name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',

        ]);
        $country = $this->CountryServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Country Successfully Update!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('Country_Delete')) {
            return abort(503);
        }
        $country = $this->CountryServices->destroy($id);

        Session::flash('flash_message_sucess', 'Country Successfully Delete!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.country.index');
    }
}
