<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\PagesController;
use App\Mail\Subcribe;
use App\Models\Blog;
use App\Models\Contect;
use App\Models\File;
use App\Models\FileDownload;
use App\Models\Job;
use App\Models\page;
use App\Models\Service;
use App\Models\JobsApply;
use App\Models\Subcriber;
use Illuminate\Http\Request;
use App\Mail\ContectMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OutputController extends Controller
{

    public function why_us()
    {

        return view('why_us');
    }


    public function services($slug)
    {

        $s = Service::where('slug', $slug)->first();


        if ($s) {

            return view('services', compact('s'));
        } else {
            return redirect('/');
        }


    }

    public function blogs()
    {

        $s = Blog::get();
//        dd($s);


        if ($s) {

            return view('blogs', compact('s'));
        } else {
            return redirect('/');
        }


    }

    public function blogs_details($slug)
    {

        $s = Blog::where('slug', $slug)->first();


        if ($s) {

            return view('blog_details', compact('s'));
        } else {
            return redirect('/');
        }


    }

    public function careers()
    {
        $c = page::where('name', 'careers')->first();


        $jobs = Job::all();

        if ($c) {

            return view('careers', compact('c', 'jobs'));
        } else {
            return redirect('/');
        }


    }

    public function infographics()
    {
        $c = page::where('name', 'infographics')->first();
        $files = File::get();

        $jobs = Job::all();

        if ($c) {

            return view('infographics', compact('c', 'jobs', 'files'));
        } else {
            return redirect('/');
        }


    }

    public function events_gallery()
    {
        $c = page::where('name', 'events-gallery')->first();


        $jobs = Job::all();

        if ($c) {

            return view('events_gallery', compact('c', 'jobs'));
        } else {
            return redirect('/');
        }


    }

    public function careers_apply(Request $request)
    {

        $JobsApply = new JobsApply();
        $JobsApply->email = $request->email;
        $JobsApply->name = $request->name;
        $JobsApply->job_id = $request->job_id;
        if ($request->hasfile('cv')) {
            $file = $request->file('cv');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/image';
            $file->move($destinationPath, $fileNameToStore);
            $JobsApply->cv = $destinationPath . '/' . $fileNameToStore;
        }
        $JobsApply->save();
        Session::flash('flash_message_sucess', 'Contact soon!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();

//              $jobs = Job::all();
//
//        if ($c) {
//
//            return view('careers', compact('c','jobs'));
//        } else {
//            return redirect('/');
//        }


    }

    public function services_all()
    {

        $s = Service::get();
        return view('services_all', compact('s'));

    }

    public function contact_us()
    {

        $c = page::where('name', 'contact-us')->first();


        if ($c) {

            return view('contact_us', compact('c'));
        } else {
            return redirect('/');
        }


    }

    public function trust_center()
    {
        $c = page::where('name', 'Trust-Center')->first();
        return view('trust_center', compact('c'));
//dd('tfrgjr');
//        $c = page::where('name', 'Trust-Center')->first();
//
//
//        if ($c) {
//
//            return view('trust_center');
//        } else {
//            return redirect('/');
//        }


    }

    public function subcribe(Request $request)
    {

        $data = $request->all();
        $data['email'] = $request->email;
        Subcriber::create($data);
        Mail::to($request->email)->send(new Subcribe());
        return redirect()->back();
    }

    public function file_download(Request $request)
    {
        Session::put('file_download', 1);
        $data = $request->all();

        FileDownload::create($data);

        return redirect()->back();
    }

    public function contact_us_post(Request $request)
    {


        $c = new Contect();
        $c->f_name = $request->firstname;
        $c->l_name = $request->lastname;
        $c->tittle = $request->tittle;
        $c->email = $request->email;
        $c->mobile = $request->mobile;
        $c->hear = $request->hear;
        $c->country = $request->country;
        $c->company = $request->company;
        $c->message = $request->message;
        $c->save();


        $details = [
            'data' => $c,
            'title' => 'Contact US',
            'body' => ' '
        ];

//        Mail::to('saimashammas19@gmail.com')->send(new ContectMail($details));
        Mail::to($request->email)->send(new ContectMail($details));

        Session::flash('flash_message_sucess', 'Contact soon!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();

    }

    public function why_cyber()
    {
        $c = page::where('name', 'why-cyber')->first();
        return view('why_cyber', compact('c'));
    }
}
