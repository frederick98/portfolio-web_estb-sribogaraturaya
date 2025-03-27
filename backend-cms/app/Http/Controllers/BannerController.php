<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Models\Banner;
use App\Helpers\ImageHelper;
use App\Http\Requests\BannerRequest;
use Ramsey\Uuid\Uuid;

class BannerController extends Controller
{
    public function index () {
        $data['totalBanner'] = Banner::count();
        $data['banner'] = Banner::orderBy('created_time', 'desc')->get();
        return view('admin.banner.bannerList', $data);
    }

    public function create () {
        return view('admin.banner.bannerCreate');
    }

    public function post(BannerRequest $request){
        $URL = env('APP_URL');
        $uuid = Uuid::uuid4();
        
        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'banner', 1366);
        }

        $input = Banner::create([
            'id'=>$uuid,
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'url'=>$request->url,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('banner.list')->with('status','Banner has been successfully created!'); 
    }

    public function edit ($id) {
        // item banner yang akan diedit
        $data['first'] = Banner::where('id', $id)->firstOrFail();
        return view('admin.banner.bannerEdit', $data);
    }

    public function postEdit(BannerRequest $request, $id){
        $data = Banner:: where('id', $id)->first();
        
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'banner', 1366);
        }

        $data->update([
            'name'=>$request->name,
            // 'image'=>$request->image,
            // 'image'=>$request->image = isset($path) ? $URL . '/storage/' . $path : $data->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'url'=>$request->url,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('banner.list')->with('status','Banner has been successfully updated!'); 
    }

    public function delete($id) {
        $delete = Banner::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            Banner::destroy($id);
            return redirect()->route('banner.list')->with('deleted','Banner has been successfully deleted!'); 
            // return response()->json([
            //     'success'=>true,
            //     'message'=>'Artikel berhasil dihapus'
            // ],200);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'data tidak tersedia'
            ],404);
        }
    }
}
