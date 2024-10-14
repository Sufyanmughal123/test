<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ServiceServices;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    protected $categoryService;
    public function __construct(ServiceServices $ServiceServices, CategoryService $categoryService)
    {
        $this->ServiceServices = $ServiceServices;
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        //        if (!Gate::allows('Services_index')) {
        //            return abort(503);
        //        }
        return view('admin.service.index');
    }

    public function getdata()
    {
        return $this->ServiceServices->getdata();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        if (!Gate::allows('Services_create')) {
        //            return abort(503);
        //        }
        $categories = $this->categoryService->index();
        $services = $this->ServiceServices->create();

        return view('admin.service.create', compact('services', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'slug' => 'required|unique:services|max:255',

        ]);

        $this->ServiceServices->store($request);
        Session::flash('flash_message_sucess', 'Services  create Successfully!!!.');

        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = $this->ServiceServices->show($id);

        return view('admin.service.view', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        if (!Gate::allows('Services_edit')) {
        //            return abort(503);
        //        }
        $categories = $this->categoryService->index();
        $services = $this->ServiceServices->create();

        $service = $this->ServiceServices->show($id);


        return view('admin.service.edit', compact('service', 'services','categories'));
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
        $this->ServiceServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Service  Update Successfully!!!.');

        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //        if (!Gate::allows('Services_Delete')) {
        //            return abort(503);
        //        }
        $this->ServiceServices->destroy($id);
        Session::flash('flash_message_sucess', ' blogs  delete Successfully!!!.');
        return redirect()->route('admin.services.index');
    }
}
