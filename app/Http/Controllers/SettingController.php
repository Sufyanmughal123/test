<?php

namespace App\Http\Controllers;

use App\Models\bookAppointment;
use App\Models\Settings;
use App\Models\Contect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function update(Request $request, $id)
    {


//        $this->validate($request, [
//            'site_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=136,height=137',
//        ]);
        $settings = Settings::find(1);
        $settings->site_title = $request->site_title;
        $settings->site_email = $request->site_email;

        if ($request->hasfile('site_logo')) {
            $file = $request->file('site_logo');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Settings';
            $file->move($destinationPath, $fileNameToStore);
            $settings->site_logo = $destinationPath . '/' . $fileNameToStore;
        }
        $settings->site_reception_no = $request->site_reception_no;
        $settings->site_mobile_no = $request->site_mobile_no;
        $settings->loc_3 = $request->loc_3;
        $settings->loc_2 = $request->loc_2;
        $settings->address_one_heading = $request->address_one_heading;
        $settings->address_two_heading = $request->address_two_heading;
        $settings->address_three_heading = $request->address_three_heading;


        if ($request->hasfile('site_icons')) {
            $file = $request->file('site_icons');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Settings';
            $file->move($destinationPath, $fileNameToStore);
            $settings->site_icons = $destinationPath . '/' . $fileNameToStore;


        }
        $settings->site_Delivery = $request->site_Delivery;
        $settings->site_working_hours = $request->site_working_hours;

        $settings->facebook_icon = $request->facebook_icon;
        $settings->insta_icon = $request->insta_icon;
        $settings->twitter_icon = $request->twitter_icon;
        $settings->linkedin_icon = $request->linkedin_icon;
        $settings->get_in_touch = $request->get_in_touch;
        $settings->head_office = $request->head_office;
         $settings->whatsappnumber=$request->whatsappnumber;
//         $settings->zohoo=$request->zohoo;
         $settings->map=$request->map;
         $settings->markee_tag=$request->markee_tag;

        $settings->save();

        Session::flash('flash_message_sucess', 'Setting  Update Successfully!!!.');
        return redirect()->back();
    }

    public function edit()
    {
        $settings = Settings::find(1);
//        dd($settings);
        return view('admin.settings_edit', compact('settings'));

    }


    public  function Booking_query(){
        $booking_inquiries=bookAppointment::all();



        return view('admin.contact.index',compact('booking_inquiries'));
    }

    public  function Conect_form(){
        $contacts_forms=Contect::all();


        return view('admin.contactform.inquiry',compact('contacts_forms'));
    }




}
