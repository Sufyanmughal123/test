<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SplashPopUp;

class SplashPopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $splashPopUps  = SplashPopUp::all();
        return view('admin.splash.index', compact('splashPopUps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.splash.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|integer',
            'url' => 'nullable|url',
        ]);

        $splashPopUp = new SplashPopUp();
        $splashPopUp->name = $request->name;
        $splashPopUp->description = $request->description;
        $splashPopUp->status = $request->status;
        $splashPopUp->url = $request->url;

        // Define the path where you want to store the image
        $path = public_path('admin/assets/splash');

        // Store the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName(); // Generate a unique filename
            $image->move($path, $filename); // Move the image to the specified path
            $splashPopUp->image = '/assets/splash/' . $filename; // Save the path in the database
        }

        $splashPopUp->save();
        return redirect()->route('admin.splash-pop-ups.index')->with('success', 'Splash pop-up created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $splashPopUp = SplashPopUp::findOrFail($id);
        return view('admin.splash.edit', compact('splashPopUp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|integer',
            'url' => 'nullable|url',
        ]);

        // Find the existing splash pop-up
        $splashPopUp = SplashPopUp::findOrFail($id);

        // Update fields
        $splashPopUp->name = $request->name;
        $splashPopUp->description = $request->description;
        $splashPopUp->status = $request->status;
        $splashPopUp->url = $request->url;

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($splashPopUp->image) {
                Storage::disk('public')->delete($splashPopUp->image);
            }

            // Store the new image
            $path = 'splash'; // This will save the image in storage/app/public/splash
            $filename = $request->file('image')->store($path, 'public');

            // Update the image filename in the database
            $splashPopUp->image = $filename;
        }

        // Save the updated splash pop-up
        $splashPopUp->save();
        return redirect()->route('admin.splash-pop-ups.index')->with('success', 'Splash pop-up updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $splashPopUp = SplashPopUp::findOrFail($id);


        if ($splashPopUp->image) {
            Storage::disk('public')->delete($splashPopUp->image);
        }


        $splashPopUp->delete();
        return redirect()->route('admin.splash-pop-ups.index')->with('success', 'Splash pop-up updated successfully.');
    }
}
