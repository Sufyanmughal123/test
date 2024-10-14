<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\GalleryServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Display a listing of the resource.
 * created by saima
 *
 */
class GalleryController extends Controller
{

    public function __construct(GalleryServices $GalleryServices)
    {
        $this->GalleryServices = $GalleryServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->GalleryServices->store($request);
        Session::flash('flash_message_sucess', 'Gallery  create Successfully!!!.');
        return redirect()->route('admin.gallery.index');
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
        $gallery = $this->GalleryServices->edit($id);
        return view('admin.gallery.edit', compact('gallery'));

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
        $gallery = $this->GalleryServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Gallery  update Successfully!!!.');

        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = $this->GalleryServices->destroy($id);
        Session::flash('flash_message_sucess', 'Gallery  delete Successfully!!!.');
        return redirect()->route('admin.gallery.index');
    }

    public function getdata(Request $request)
    {
        return $this->GalleryServices->getdata($request);
    }
}
