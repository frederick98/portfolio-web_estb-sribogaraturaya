<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Models\CompanyPicture;
use App\Http\Requests\CompanyPictureRequest;
use App\Helpers\ImageHelper;
use Ramsey\Uuid\Uuid;

class CompanyPictureController extends Controller
{
    //
    public function index () {
        $data['totalPic'] = CompanyPicture::count();
        $data['picture'] = CompanyPicture::orderBy('created_time', 'desc')->get();
        return view('admin.companyPic.companyPicIndex', $data);
    }

    public function create () {
        return view('admin.companyPic.companyPicCreate');
    }

    public function post(CompanyPictureRequest $request){
        $URL = env('APP_URL');
        $uuid = Uuid::uuid4();

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'company-pic', 1366);
        }

        $input = CompanyPicture::create([
            'id'=>$uuid,
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'captions'=>$request->captions,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('companyPic.list')->with('status','Company Picture has been successfully created!'); 
    }

    public function edit ($id) {
        // item company picture yang akan diedit
        $data['first'] = CompanyPicture::where('id', $id)->firstOrFail();
        return view('admin.companyPic.companyPicEdit', $data);
    }

    public function postEdit(CompanyPictureRequest $request, $id){
        $data = CompanyPicture:: where('id', $id)->first();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'company-pic', 1366);
        }

        $data->update([
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'captions'=>$request->captions,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('companyPic.list')->with('status','Company Picture has been successfully updated!'); 
    }

    public function delete($id) {
        $delete = CompanyPicture::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            CompanyPicture::destroy($id);
            return redirect()->route('companyPic.list')->with('deleted','Company Picture has been successfully deleted!'); 
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
