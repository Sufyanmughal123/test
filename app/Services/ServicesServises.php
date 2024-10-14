<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post_Tag;
use App\Models\Service;
use App\Models\Service_Images;
use App\Models\Service_Tags;
use App\Models\Sub_Category;
use Config;
use DataTables;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class ServicesServises
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {


        if (auth()->user()->role('admin')->first())
            return Service::with('cat', 'sub_cat', 'service_image', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->get();
        else
            return Service::where('user_id', auth()->id())->with('cat', 'sub_cat', 'service_image', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->get();

    }

    public function apiindex()
    {
        if (auth()->user()->role('admin')->first())
            return Service::with('cat', 'tags', 'sub_cat', 'service_image', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->orderBy('id', 'DESC')->get();
        else
            return Service::where('user_id', auth()->id())->with('tags', 'cat', 'sub_cat', 'service_image', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->orderBy('id', 'DESC')->get();
    }

    public function create()
    {
        $data['Categorys'] = Category::all();
        $data['Sub_Category'] = Sub_Category::all();
        return $data;
    }

    public function store($request)
    {
        $data = $request->all();

        $data['user_id'] = auth()->id();


        $data['slug'] = Str::slug($request->slug);


        $service = Service::create($data);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/uplaod_img/';
            $file->move($destinationPath, $fileNameToStore);
            $iamge = new Service_Images();
            $iamge->service_id = $service->id;
            $iamge->url = $fileNameToStore;
            $iamge->path = $destinationPath . '/';
            $iamge->save();
        }

        $tags = explode(",", $data['tags']);


        foreach ($tags as $item) {
            $Service_Tags = new    Service_Tags();
            $Service_Tags->service_id = $service->id;
            $Service_Tags->Tag_text = $item;
            $Service_Tags->save();
        }


    }

    public function uploadImage($path, $image)
    {
        $folderPath = $path;

        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $image_name = uniqid() . '.' . $image_type;
        $file = $folderPath . $image_name;
        file_put_contents($file, $image_base64);
        return $image_name;
    }

    public function apistore($request)
    {
        $data['title'] = $request->data['title'];
        $data['post'] = $request->data['text'];
        $data['meta'] = $request->data['meta'];
        $data['alt_text'] = $request->data['alt_text'];
        $data['meta_description'] = $request->data['description'];
        $data['user_id'] = auth()->id();
        $data['cat_id'] = $request->data['cat'];
        $data['sub_cat_id'] = $request->data['subcat'];
        $service = Service::create($data);
        $data['image'] = $this->uploadImage('dist/uplaod_img/', $request->data['image']);
        $iamge = new Service_Images();
        $iamge->service_id = $service->id;
        $iamge->url = $data['image'];
        $iamge->path = 'dist/uplaod_img/';
        $iamge->save();
        foreach ($request->data['tags'] as $item) {
            $Service_Tags = new    Service_Tags();
            $Service_Tags->service->id = $service->id;
            $Service_Tags->Tag_text = $item['text'];
            $Service_Tags->save();
        }

//        $Post_Tag = new    Post_Tag();

    }

    public function getdata()
    {
        $data = Service::with('user_name', 'cat', 'sub_cat')->select('id', 'title', 'user_id', 'alt_text', 'views')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form   onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');" method="POST"  action="' . route("admin.services.destroy", $row->id) . '"> ';
//                $btn = $btn . '<a href=" ' . route("admin.services.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.services.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2"    ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('user', function ($row) {
                return $row->user_name->name;

            })
            ->rawColumns(['action', 'user'])
            ->make(true);
    }

    public function edit($id)
    {
        return Service::where('id', $id)->with('cat', 'tags', 'sub_cat', 'service_image', 'user_name')->first();
    }

    public function update($request, $id)
    {
//        try {
        $service = Service::find($id);
//            dd($request);
        $service->title = $request->title;
        $service->post = $request->text;
        $service->meta = $request->meta_title;
        $service->alt_text = $request->alt_text;
        $service->meta_description = $request->meta_description;
//            $service->cat_id = $request->cat;
//            $service->sub_cat_id = $request->subcat;
        $service->save();
        if (isset($request->image) && $request->image != null) {
            $data['image'] = $this->uploadImage('dist/uplaod_img/', $request->image);
            $iamge = Service_Images::where('service_id', $id)->first();
            if (!$iamge) {
                $iamge = new Service_Images();
            }
            $iamge->service_id = $id;
            $iamge->url = $data['image'];
            $iamge->path = 'dist/uplaod_img/';
            $iamge->save();
        }

        $tags = Service_Tags::where('service_id', $id)->get();
        foreach ($tags as $item) {
            $item->delete();
        }

        $tags = explode(",", $request->tags);
        foreach ($tags as $item) {
            $tags = new    Service_Tags();
            $tags->service_id = $id;
            $tags->Tag_text = $item;
            $tags->save();
        }


//        foreach ($tags as $item) {
//            $Post_Tag = new    Service_Tags();
//            $Post_Tag->post_id = $id;
//            $Post_Tag->Tag_text = $item;
//            $Post_Tag->save();
//        }
//        } catch (\Exception $e) {
//            return $e->getMessage();
//        }


    }

    public function destroy($id)
    {
        $Service = Service::findOrFail($id);
        if ($Service)
            $Service->delete();
    }

    public function getslugpost($slug)
    {
        return Service::with('user_name', 'service_image', 'tags')->where('slug', $slug)->first();

    }

    public function lists()
    {
        return Service::with('user_name', 'service_image', 'tags')->get();

    }

    public function Home_lists()
    {
        return Service::with('user_name', 'service_image', 'tags')->orderBy('id', 'desc')->get()->take(2);

    }

    public function getdetails($slug)
    {
        return Service::where('slug', $slug)->first();
    }

    public function recent()
    {
        return Service::with('user_name', 'service_image', 'tags')->orderBy('id', 'desc')->get()->take(3);

    }
}
