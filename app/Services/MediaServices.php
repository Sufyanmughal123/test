<?php

namespace App\Services;

use App\Models\Media;
use Config;
use DataTables;

class MediaServices
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {

    }


    public function create()
    {
//        return Blog::pluck('country_name', 'id');

    }

    public function store($request)
    {

        $data = $request->all();

        if ($request->hasfile('image')) {
            $file = $request->file('image');


            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/data';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
            $data['url'] = $destinationPath . '/' . $fileNameToStore;
            Media::create($data);

        }


    }

    public function show($id)
    {
        $Media = Media::find($id);
        return $Media;
    }


    public function getdata($request)
    {
        $data = Media::select('*')->orderBy('id', 'desc');


        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form class=" row"  method="POST" id="delet_' . $row->id . '" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.media.destroy", $row->id) . '"><div class="col-md-1"></div> ';
//                $btn = $btn . '<a href=" ' . route("admin.gallery.show", $row->id) . '"  class="col-md-2  "><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.media.edit", $row->id) . '" class=" col-md-2  ">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="javascript:void(0)"   onclick=" confirm(' . "'Are you sure you want to Delete this?'" . '); document.getElementById(`delet_' . $row->id . '`).submit()"  class="ml-2 mg-r-3 col-md-2" ><i class="fas fa-trash"></i></a>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('image', function ($row) {
                $btn = '   <img src="' . asset($row->image) . '" width="200px;" /> ';

                return $btn;
            })->addColumn('url', function ($row) {
                $btn = '   <a  target="_blank"  href="/' . $row->url . '"> Link</a>';
                return $btn;
            })
            ->rawColumns(['action', 'image', 'url'])
            ->make(true);
    }

    public function edit($id)
    {


        return Media::find($id);


    }

    public function update($request, $id)
    {
        $Media = Media::find($id);

        $data = $request->all();
//        $data['image']="dist/Profile/defualt.png";
        $fileNameToStore = null;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/image';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
            $data['url'] = $destinationPath . '/' . $fileNameToStore;

        }

        $Media->update($data);
        return $Media;
    }

    public function destroy($id)
    {
        $Media = Media::findOrFail($id);
        if ($Media)
            $Media->delete();


    }

    public function configrationApi(Request $request)
    {

        $slug = 'roles';
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        if ($request->facebook == 'fb') {
            $fb = 'fb';
        } else {
            $fb = 'uan';
        }
        // dd($request->agent_id);
        $apiconfig = ApiIntegrationSetting::create([
            'agent_id' => json_encode($request->agent_id),
            'facebook' => $fb,
            'api_duration' => $request->api_duration,
            'account_id' => $request->account_id,
            'app_id' => $request->app_id,
            'compaign_id' => $request->compaign_id,
            'fb_token' => $request->fb_token,
            'base_path' => $request->base_path,
            'uan_token' => $request->uan_token,
        ]);

//        foreach ($request->agent_id as $key => $a) {
//            $agentdata = User::where('id', $a)->where('status', '1')->first();
//            // dd($agentdata);
//            $SelectedAgents = ApiIntegrationAgents::create([
//                'integration_id' => $apiconfig->id,
//                'agent_id' => $agentdata->id,
//                'date' => date('Y-m-d'),
//                'lead_count' => '0',
//            ]);
//        }
        $agents = User::whereIn('role_id', ['5', '8'])->get();
        $api_integration = DB::table('api_integration_settings');

        return view('leads.uan-configration', compact('apiconfig', 'agents', 'dataType', 'api_integration'));
    }


}
