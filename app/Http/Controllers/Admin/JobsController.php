<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\JobServices;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{

    public function __construct(JobServices $JobServices)
    {
        $this->JobServices = $JobServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobs.index');
    }

    public function getdata()
    {
        return $this->JobServices->getdata();
    }

    public function applied_view()
    {
        return view('admin.jobs.applied');
    }

    public function applied()
    {
        return $this->JobServices->applied();
    }

    public function applied_show($id)
    {
        $data = $this->JobServices->applied_show($id);
        return view('admin.jobs.show_jobs_applied',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->JobServices->store($request);
        Session::flash('flash_message_sucess', 'Jobs  create Successfully!!!.');

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = $this->JobServices->show($id);

        return view('admin.jobs.view', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = $this->JobServices->show($id);


        return view('admin.jobs.edit', compact('job'));
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
        $this->JobServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Jobs  Update Successfully!!!.');

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->JobServices->destroy($id);
        Session::flash('flash_message_sucess', ' jobs  delete Successfully!!!.');
        return redirect()->route('admin.jobs.index');
    }
}
