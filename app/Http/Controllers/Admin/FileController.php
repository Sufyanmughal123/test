<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FileServices;

use Illuminate\Support\Facades\Session;

class FileController extends Controller
{
    public function __construct(FileServices $FileServices){
        $this->FileServices = $FileServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.files.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $request->validate([
//            'image' => 'required|mimes:jpg,jpeg,png,pdf,docx,zip|max:10120', // max size in KB (5MB)
//        ]);

        $this->FileServices->store($request);
        Session::flash('flash_message_sucess', 'files  create Successfully!!!.');
        return redirect()->route('admin.files.index');
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
        $gallery = $this->FileServices->edit($id);
        return view('admin.files.edit', compact('gallery'));

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
        $gallery = $this->FileServices->update($request, $id);
        Session::flash('flash_message_sucess', 'files  update Successfully!!!.');

        return redirect()->route('admin.files.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = $this->FileServices->destroy($id);
        Session::flash('flash_message_sucess', 'files  delete Successfully!!!.');
        return redirect()->route('admin.files.index');
    }

    public function getdata(Request $request)
    {
        return $this->FileServices->getdata($request);
    }
}
