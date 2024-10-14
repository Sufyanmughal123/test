<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingServices;
use App\Models\Settings;
use Illuminate\Http\Request;
use Gate;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */

    public function __construct(SettingServices $SettingServices)
    {
        $this->SettingServices = $SettingServices;
    }

    public function slider_update(Request $request)
    {
//        dd($request);

        $slider = Settings::find(1);
        $slider->title = $request->title;
        $slider->name = $request->name;
        $slider->long_description = $request->long_description;
        $slider->short_description = $request->short_description;
//        $slider->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $slider->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $slider->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }

        $slider->alt_text_image = $request->alt_text_image;
//        $slider->desktop_image = $request->desktop_image;
        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $slider->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $slider->text = $request->text;

        $slider->icons = $request->icons;
        $slider->save();
        return redirect()->back();
    }

    public function slider_edit()
    {
        if (!Gate::allows('slider_edit')) {
            return abort(503);
        }
        $slider = Settings::find(1);
        return view('admin.slider.slider_edit', compact('slider'));

    }


    public function why_uran_update(Request $request)
    {


        $why_uran = Settings::find(2);
        $why_uran->title = $request->title;
        $why_uran->title_two = $request->title_two;
        $why_uran->title_three = $request->title_three;
        $why_uran->name = $request->name;
        $why_uran->long_description = $request->long_description;
        $why_uran->short_description = $request->short_description;
//                $slider->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $why_uran->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $why_uran->alt_text_image = $request->alt_text_image;
//                $slider->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $why_uran->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }

        $why_uran->text = $request->text;
        $why_uran->text_two = $request->text_two;
        $why_uran->text_three = $request->text_three;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $why_uran->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $why_uran->icons = $request->icons;
        $why_uran->save();
        return redirect()->back();
    }

    public function why_uran_edit()
    {
        if (!Gate::allows('Uran_Edit')) {
            return abort(503);
        }
        $why_uran = Settings::find(2);
        return view('admin.whyuran.why_uran_edit', compact('why_uran'));

    }

    public function Scholarships_update(Request $request)
    {
        //        dd($request);
        $scholarships = Settings::find(3);
        $scholarships->title = $request->title;
        $scholarships->name = $request->name;
        $scholarships->long_description = $request->long_description;
        $scholarships->short_description = $request->short_description;
//                        $scholarships->mbl_image = $request->mbl_image;

        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $scholarships->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $scholarships->alt_text_image = $request->alt_text_image;
//                        $scholarships->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $scholarships->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $scholarships->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $scholarships->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $scholarships->icons = $request->icons;
        $scholarships->save();
        return redirect()->back();
    }

    public function Scholarships_edit()
    {
        if (!Gate::allows('Scholarships_Edit')) {
            return abort(503);
        }
        $scholarships = Settings::find(3);
        return view('admin.scholarships.scholarships_edit', compact('scholarships'));

    }


    public function Uraann_Multi_update(Request $request)
    {
        //        dd($request);
        $Uraann_Multi = Settings::find(4);
        $Uraann_Multi->title = $request->title;
        $Uraann_Multi->name = $request->name;
        $Uraann_Multi->long_description = $request->long_description;
        $Uraann_Multi->short_description = $request->short_description;
//                        $Uraann_Multi->mbl_image = $request->mbl_image;

        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $Uraann_Multi->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Uraann_Multi->alt_text_image = $request->alt_text_image;
//                        $Uraann_Multi->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $Uraann_Multi->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Uraann_Multi->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $Uraann_Multi->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $Uraann_Multi->icons = $request->icons;
        $Uraann_Multi->save();
        return redirect()->back();
    }

    public function Uraann_Multi_edit()
    {
        if (!Gate::allows('Uraan_Multi_edit')) {
            return abort(503);
        }
        $Uraann_Multi = Settings::find(4);
        return view('admin.UraannMulti.Uraann_Multi_edit', compact('Uraann_Multi'));

    }

    public function Partner_Universities_update(Request $request)
    {
        //        dd($request);
        $Partner_Universities = Settings::find(5);
        $Partner_Universities->title = $request->title;
        $Partner_Universities->name = $request->name;
        $Partner_Universities->long_description = $request->long_description;
        $Partner_Universities->short_description = $request->short_description;
//                                $Partner_Universities->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $Partner_Universities->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Partner_Universities->alt_text_image = $request->alt_text_image;
//                                $Partner_Universities->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $Partner_Universities->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Partner_Universities->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $Partner_Universities->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $Partner_Universities->icons = $request->icons;
        $Partner_Universities->save();
        return redirect()->back();
    }

    public function Partner_Universities_edit()
    {
        if (!Gate::allows('Partner_Universities_edit')) {
            return abort(503);
        }
        $Partner_Universities = Settings::find(5);
        return view('admin.P_Universities.Uraann_Multi_edit', compact('Partner_Universities'));

    }


    public function collaborate_update(Request $request)
    {
        //        dd($request);
        $collaborate = Settings::find(6);
        $collaborate->title = $request->title;
        $collaborate->name = $request->name;
        $collaborate->long_description = $request->long_description;
        $collaborate->short_description = $request->short_description;
//        $collaborate->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $collaborate->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $collaborate->alt_text_image = $request->alt_text_image;
//        $collaborate->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $collaborate->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $collaborate->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $collaborate->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $collaborate->icons = $request->icons;
        $collaborate->save();
        return redirect()->back();
    }

    public function collaborate_edit()
    {
        if (!Gate::allows('Collaborate_edit')) {
            return abort(503);
        }
        $collaborate = Settings::find(6);
        return view('admin.collaborate.collaborate_edit', compact('collaborate'));

    }

    public function Abroad_journey_update(Request $request)
    {
        //        dd($request);
        $Abroad_journey = Settings::find(7);
        $Abroad_journey->title = $request->title;
        $Abroad_journey->name = $request->name;
        $Abroad_journey->long_description = $request->long_description;
        $Abroad_journey->short_description = $request->short_description;
//        $Abroad_journey->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/monile_image';
            $file->move($destinationPath, $fileNameToStore);
            $Abroad_journey->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Abroad_journey->alt_text_image = $request->alt_text_image;
//        $Abroad_journey->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $Abroad_journey->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Abroad_journey->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $Abroad_journey->video = $destinationPath . '/' . $fileNameToStore;;
        }
        $Abroad_journey->icons = $request->icons;
        $Abroad_journey->save();
        return redirect()->back();
    }

    public function Abroad_journey_edit()
    {
        if (!Gate::allows('Abroad_journey_edit')) {
            return abort(503);
        }
        $Abroad_journey = Settings::find(7);
        return view('admin.Abroad_journey.Abroad_journey_edit', compact('Abroad_journey'));

    }


    public function destination_edit()
    {
        if (!Gate::allows('Destination_edit')) {
            return abort(503);
        }
        $destination = Settings::find(8);
        return view('admin.Destination.destination', compact('destination'));

    }

    public function destination_update(Request $request)
    {
        //        dd($request);
        $destination = Settings::find(8);
        $destination->title = $request->title;
        $destination->name = $request->name;
        $destination->long_description = $request->long_description;
        $destination->short_description = $request->short_description;
//        $collaborate->mbl_image = $request->mbl_image;
        if ($request->hasfile('mbl_image')) {
            $file = $request->file('mbl_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/mobile_image';
            $file->move($destinationPath, $fileNameToStore);
            $destination->mbl_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $destination->alt_text_image = $request->alt_text_image;
//        $collaborate->desktop_image = $request->desktop_image;
        if ($request->hasfile('desktop_image')) {
            $file = $request->file('desktop_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/desktop_image';
            $file->move($destinationPath, $fileNameToStore);
            $destination->desktop_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $destination->text = $request->text;

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/video';
            $file->move($destinationPath, $fileNameToStore);
            $destination->video = $destinationPath . '/' . $fileNameToStore;;
        }
        if ($request->hasfile('background_image')) {
            $file = $request->file('background_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/background';
            $file->move($destinationPath, $fileNameToStore);
            $destination->background_image = $destinationPath . '/' . $fileNameToStore;;
        }
        $destination->icons = $request->icons;
        $destination->save();


        return redirect()->back();
    }

}



