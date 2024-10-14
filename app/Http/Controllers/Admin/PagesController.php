<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\page;
use App\Services\PageServices;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 */
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(PageServices $PageServices)
    {
        $this->PageServices = $PageServices;
    }

    public function index()
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }
        return view('admin.pages.index');
    }

    public function homeedit()
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }

        $data = $this->PageServices->homeedit();

        return view('admin.pages.home_edit', compact('data'));
    }

    public function homeupdate(Request $request)
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }

        $data = $this->PageServices->homeeupdate($request);

        return redirect()->back();
    }

    public function privacy_edit()
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }
        $page = page::where('slug', 'privacy-police')->first();
        return view('admin.pages.editprivacy', compact('page'));
    }

    public function term_edit()
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }
        $page = page::where('slug', 'terms-and-conditions')->first();
        return view('admin.pages.editprivacy', compact('page'));
    }


    public function termupdate()
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }
        $page = page::where('slug', 'terms-and-conditions')->first();
        $data = $this->PageServices->pageeupdate($request, $page->is);

        return redirect()->back();

    }

    public function privacy_uodate(Request $request,$id)
    {
//        if (!Gate::allows('Page_index')) {
//            return abort(503);
//        }

        $data = $this->PageServices->pageeupdate($request, $id);

        return redirect()->back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        if (!Gate::allows('Page_create')) {
//            return abort(503);
//        }
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->PageServices->store($request);
        Session::flash('flash_message_sucess', 'Page  Save Successfully!!!.');
        return redirect()->route('admin.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->PageServices->edit($id);

        return view('admin.pages.view');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        if (!Gate::allows('Page_edit')) {
//            return abort(503);
//        }
        $page = $this->PageServices->edit($id);
        return view('admin.pages.edit', compact('page'));

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

        $page = $this->PageServices->update($request, $id);

        Session::flash('flash_message_sucess', 'Page  Update Successfully!!!.');
        return redirect()->route('admin.pages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        if (!Gate::allows('Page_Delete')) {
//            return abort(503);
//        }
        $this->PageServices->destroy($id);
        Session::flash('flash_message_sucess', 'Page  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.permissions.index');

    }

    public function getdata()
    {
        return $this->PageServices->getdata();

    }
}
