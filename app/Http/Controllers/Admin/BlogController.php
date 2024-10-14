<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Country;
use App\Services\BlogServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gate;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     * @return \Illuminate\Http\Response
     */

    public function __construct(BlogServices $BlogServices)
    {
        $this->BlogServices = $BlogServices;
    }

    public function index()
    {

        return view('admin.blog.index');
    }

    public function getdata()
    {
        return $this->BlogServices->getdata();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $countries = $this->BlogServices->create();

        return view('admin.blog.create', compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->BlogServices->store($request);
        Session::flash('flash_message_sucess', 'Blog  create Successfully!!!.');

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->BlogServices->show($id);

        return view('admin.blog.view', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $blog = $this->BlogServices->show($id);


        return view('admin.blog.edit', compact('blog'));

    }

    public function settings(Request $request, $id){

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
        $this->BlogServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Blog  Update Successfully!!!.');

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->BlogServices->destroy($id);
        Session::flash('flash_message_sucess', ' blogs  delete Successfully!!!.');
        return redirect()->route('admin.blogs.index');

    }
}
