<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SubcriberServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gate;

class SubcriberController extends Controller
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function __construct(SubcriberServices $SubcriberServices)
    {
        $this->SubcriberServices = $SubcriberServices;
    }

    public function index()
    {

//          if (!Gate::allows('Subscriber_index')) {
//              return abort(503);
//          }
        return view('admin.subscriber.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        if (!Gate::allows('Subscriber_create')) {
//            return abort(503);
//        }
        return view('admin.subscriber.create');
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
            'email' => 'email|required|unique:subcriber',

        ]);
        $this->SubcriberServices->store($request);

        Session::flash('flash_message_sucess', 'Subscriber  Create Successfully!!!.');
        return redirect()->route('admin.subscriber.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcriber = $this->SubcriberServices->edit($id);

        return view('admin.subscriber.view',compact('subcriber'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        if (!Gate::allows('Subscriber_edit')) {
//            return abort(503);
//        }
        $subcriber = $this->SubcriberServices->edit($id);
        return view('admin.subscriber.edit', compact('subcriber'));

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

        $request->validate([
            'email' => 'required|unique:subcriber,email,' . $id,
        ]);

        $this->SubcriberServices->update($request, $id);

        Session::flash('flash_message_sucess', 'Subscriber  Update Successfully!!!.');
        return redirect()->route('admin.subscriber.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        if (!Gate::allows('Subscriber_Delete')) {
//            return abort(503);
//        }
        $this->SubcriberServices->destroy($id);

        Session::flash('flash_message_sucess', 'Subscriber  Delete Successfully!!!.');
        return redirect()->route('admin.subscriber.index');

    }

    public function getdata()
    {
        return $this->SubcriberServices->getdata();


    }
}
