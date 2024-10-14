<?php

namespace App\Services;

use App\Models\Student\DataBank;
use App\Models\Student\StudentDataBankCourse;
use Config;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\Post;
use App\Models\Post_Imags;
use App\Models\Post_Tag;
use DataTables;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Events\SendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class PostServises
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {
        if (auth()->user()->role('admin')->first())
            return Post::with('cat', 'sub_cat', 'postimag', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->get();
        else
            return Post::where('user_id', auth()->id())->with('cat', 'sub_cat', 'postimag', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->get();
    }

    public function apiindex()
    {
        if (auth()->user()->role('admin')->first())
            return Post::with('cat', 'tags', 'sub_cat', 'postimag', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->orderBy('id', 'DESC')->get();
        else
            return Post::where('user_id', auth()->id())->with('tags', 'cat', 'sub_cat', 'postimag', 'user_name')->select('id', 'title', 'cat_id', 'sub_cat_id', 'user_id')->orderBy('id', 'DESC')->get();
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


        $post = Post::create($data);

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
            $iamge = new Post_Imags();
            $iamge->post_id = $post->id;
            $iamge->url = $fileNameToStore;
            $iamge->path = $destinationPath . '/';
            $iamge->save();
        }

        $tags = explode(",", $data['tags']);


        foreach ($tags as $item) {
            $Post_Tag = new    Post_Tag();
            $Post_Tag->post_id = $post->id;
            $Post_Tag->Tag_text = $item;
            $Post_Tag->save();
        }


    }

    public function uploadImage($path, $image)
    {
        $folderPath = $path;

        dd($image);
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
        $post = Post::create($data);
        $data['image'] = $this->uploadImage('dist/uplaod_img/', $request->data['image']);
        $iamge = new Post_Imags();
        $iamge->post_id = $post->id;
        $iamge->url = $data['image'];
        $iamge->path = 'dist/uplaod_img/';
        $iamge->save();
        foreach ($request->data['tags'] as $item) {
            $Post_Tag = new    Post_Tag();
            $Post_Tag->post_id = $post->id;
            $Post_Tag->Tag_text = $item['text'];
            $Post_Tag->save();
        }

//        $Post_Tag = new    Post_Tag();

    }

    public function getdata()
    {
        $data = Post::with('user_name', 'cat', 'sub_cat')->select('id', 'title', 'user_id', 'alt_text', 'views')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form   onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');" method="POST"  action="' . route("admin.posts.destroy", $row->id) . '"> ';
//                $btn = $btn . '<a href=" ' . route("admin.posts.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.posts.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2"    ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('user', function ($row) {
                return $row->user_name->name;

            })->addColumn('category', function ($row) {
                if ($row->cat)
                    return $row->cat->name;
                else
                    return "N/A";
            })->addColumn('subCategory', function ($row) {
                if ($row->sub_cat)
                    return $row->sub_cat->name;
                else
                    return "N/A";
            })
            ->rawColumns(['action', 'user', 'category', 'subCategory'])
            ->make(true);
    }

    public function edit($id)
    {
        return Post::where('id', $id)->with('cat', 'tags', 'sub_cat', 'postimag', 'user_name')->first();
    }

    public function update($request, $id)
    {
        $Post = Post::find($id);
        if ($Post) {
            $Post->title = $request->title;
            $Post['slug'] = Str::slug($request->slug);
            $Post->post = $request->text;
            $Post->meta = $request->meta_title;

            $Post->alt_text = $request->alt_text;
            $Post->meta_description = $request->meta_description;
            $Post->cat_id = $request->cat_id;
            $Post->sub_cat_id = $request->sub_cat_id;
            $Post->save();

            if (isset($request->image) && $request->image != null) {

                if ($request->image) {
                    $file = $request->image;
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
                    $filename = preg_replace("/\s+/", '-', $filename);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    $destinationPath = 'dist/uplaod_img/';
                    $file->move($destinationPath, $fileNameToStore);
                    $data['image'] = $fileNameToStore;
                    $iamge = Post_Imags::where('post_id', $id)->first();
                    if (!$iamge) {
                        $iamge = new Post_Imags();
                    }
                    $iamge->post_id = $id;
                    $iamge->url = $data['image'];
                    $iamge->path = 'dist/uplaod_img/';
                    $iamge->save();
                }


            }

            $Post_Tags = Post_Tag::where('post_id', $id)->get();
            foreach ($Post_Tags as $item) {
                $item->delete();
            }


            $tags = explode(",", $request->tags);

            foreach ($tags as $item) {
                $Post_Tag = new    Post_Tag();
                $Post_Tag->post_id = $id;
                $Post_Tag->Tag_text = $item;
                $Post_Tag->save();
            }
        }

        return "done";
//        } catch (\Exception $e) {
//            return $e->getMessage();
//        }

    }

    public function destroy($id)
    {
        $Post = Post::findOrFail($id);
        if ($Post)
            $Post->delete();
    }

    public function getslugpost($slug)
    {
        return Post::with('user_name', 'postimag', 'tags')->where('slug', $slug)->first();

    }

    public function list()
    {
        return Post::with('sub_cat', 'cat', 'user_name', 'postimag', 'tags')->get();

    }

    public function Home_list()
    {
        return Post::with('user_name', 'postimag', 'tags')->orderBy('id', 'desc')->get()->take(2);

    }

    public function online_form($request)
    {

        $student = new DataBank();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile_no = $request->phone;
        $student->city = $request->city;
        $student->message = $request->message;
        $student->session = $request->session_id;
        $student->father_name = $request->father_name;
        $student->cnic = $request->cnic;
        $student->gender = $request->gender;
        $student->country = $request->country;
        $student->city = $request->city;
        $student->payemnt_method = $request->payemnt_method;
        $student->save();
        event(new SendMail($student));
    }

    public function campus_form($request)
    {


        $student = new DataBank();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile_no = $request->phone;
        $student->city = $request->city;
        $student->message = $request->message;
        $student->session = $request->session_id;
        $student->father_name = $request->father_name;
        $student->cnic = $request->cnic;
        $student->gender = $request->gender;
        $student->country = $request->country;
        $student->city = $request->city;
        $student->payemnt_method = $request->payemnt_method;
        $student->save();

//        $StudentCourse = new StudentDataBankCourse();
//        $StudentCourse->course_id = $request->course_id;
//        $StudentCourse->student_data_bank_id = $student->id;
//        $StudentCourse->save();
        event(new SendMail($student));

//        dd($request);
    }

    public function recent()
    {
        return Post::with('user_name', 'postimag', 'tags')->orderBy('id', 'desc')->get()->take(3);

    }
}
