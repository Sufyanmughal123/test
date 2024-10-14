<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Display a listing of the resource.
 * created by Ashar Azeem
 * ashararsi2@gmail.com
 */
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(MediaServices $MediaServices)
    {
        $this->MediaServices = $MediaServices;
    }

    public function getdata(Request $request)
    {
        return $this->MediaServices->getdata($request);
    }

    public function index()
    {
        return view('admin.media.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->MediaServices->store($request);
        Session::flash('flash_message_sucess', 'Media  create Successfully!!!.');
        return redirect()->route('admin.media.index');
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
        $media = $this->MediaServices->edit($id);
        return view('admin.media.create', compact('media'));
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
        $this->MediaServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Media  Update Successfully!!!.');
        return redirect()->route('admin.media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->MediaServices->destroy($id);
        Session::flash('flash_message_sucess', 'Media  Delete Successfully!!!.');
        return redirect()->route('admin.media.index');
    }
}
