<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use Auth;

use App\Models\AboutUs;
use App\Models\BannerAboutUs;
use App\Http\Requests\AboutUsRequest;
use App\Http\Requests\BannerRequest;
use App\Helpers\ImageHelper;

class AboutController extends Controller
{
    public function index() {
        $data['totalBanner'] = BannerAboutUs::count();
        $data['banner'] = BannerAboutUs::orderBy('created_time', 'desc')->get();
        $data['first'] = AboutUs::where('id', 1)->first();

        return view('admin.about.aboutIndex', $data);
    }

    public function postIndex(AboutUsRequest $request){
        $data = AboutUs::where('id', 1)->first();

        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'banner-about', 1366);
        }

        $data->update([
            'mission1_txt'=>$request->mission1_txt,
            'mission2_txt'=>$request->mission2_txt,
            'mission3_txt'=>$request->mission3_txt,
            'vision1_txt'=>$request->vision1_txt,
            'vision2_txt'=>$request->vision2_txt,
            'vision3_txt'=>$request->vision3_txt,
            'quote_txt'=>$request->quote_txt,
            'url_slug'=>$request->url,
            'title_tag'=>$request->metaTitle,
            'meta_description'=>$request->metaDesc,
            'canonical_tag'=>$request->canonical_tag,
            // 'image'=>$request->image = isset($path) ? $URL . '/storage/' . $path : $data->image,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);

        return redirect()->route('about.index')->with('status', 'About Us has been successfully updated!'); 
    }

    public function createBanner(){
        return view('admin.about.aboutBannerCreate');
    }
    
    public function postBanner(BannerRequest $request){
        $URL = env('APP_URL');
        $uuid = Uuid::uuid4();
        
        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'banner-about', 1366);
        }

        $input = BannerAboutUs::create([
            'id'=>$uuid,
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'url'=>$request->url,
            'status'=>$request->status,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('about.index')->with('status','Banner has been successfully created!'); 
    }

    public function deleteBanner($id){
        $delete = BannerAboutUs::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            BannerAboutUs::destroy($id);
            return redirect()->route('about.index')->with('deleted','Banner has been successfully deleted!'); 
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

    // public function edit () {
    //     return view('admin.about.aboutUpdate');
    // }

    // public function editBanner () {
    //     return view('admin.about.aboutBanner');
    // }
}
