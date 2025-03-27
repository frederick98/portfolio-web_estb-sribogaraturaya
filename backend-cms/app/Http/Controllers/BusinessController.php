<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Models\Business;
use App\Http\Requests\BusinessRequest;
use App\Helpers\ImageHelper;
use Ramsey\Uuid\Uuid;

class BusinessController extends Controller
{
    //
    public function index () {
        $data['totalPic'] = Business::count();
        $data['picture'] = Business::orderBy('created_time', 'desc')->get();
        return view('admin.business.businessIndex', $data);
    }

    public function create () {
        return view('admin.business.businessCreate');
    }

    public function post(BusinessRequest $request){
        $uuid = Uuid::uuid4();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'our-business', 1366);
        }

        $input = Business::create([
            'id'=>$uuid,
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'caption'=>$request->caption,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('business.list')->with('status', 'Business has been successfully created!'); 
    }

    public function edit ($id) {
        // item business yang akan diedit
        $data['first'] = Business::where('id', $id)->firstOrFail();
        return view('admin.business.businessEdit', $data);
    }

    public function postEdit(BusinessRequest $request, $id){
        $data = Business:: where('id', $id)->first();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'our-business', 1366);
        }

        $data->update([
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'caption'=>$request->caption,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('business.list')->with('status','Business has been successfully updated!'); 
    }

    public function delete($id) {
        $delete = Business::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            Business::destroy($id);
            return redirect()->route('business.list')->with('deleted','Business has been successfully deleted!'); 
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
