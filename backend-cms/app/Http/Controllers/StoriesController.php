<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Models\Stories;
use App\Http\Requests\StoriesRequest;
use App\Helpers\ImageHelper;
use Ramsey\Uuid\Uuid;

class StoriesController extends Controller
{
    //
    public function index () {
        $data['totalPic'] = Stories::count();
        $data['picture'] = Stories::orderBy('created_time', 'desc')->get();
        return view('admin.stories.storiesIndex', $data);
    }

    public function create () {
        return view('admin.stories.storiesCreate');
    }

    public function post(StoriesRequest $request){
        $uuid = Uuid::uuid4();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'our-stories', 1366);
        }

        $input = Stories::create([
            'id'=>$uuid,
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'year'=>$request->year,
            'alt_text'=>$request->alt_text,
            'caption'=>$request->caption,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('stories.list')->with('status', 'Stories has been successfully created!'); 
    }

    public function edit ($id) {
        // item stories yang akan diedit
        $data['first'] = Stories::where('id', $id)->firstOrFail();
        return view('admin.stories.storiesEdit', $data);
    }

    public function postEdit(StoriesRequest $request, $id){
        $data = Stories:: where('id', $id)->first();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'our-stories', 1366);
        }

        $data->update([
            'name'=>$request->name,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'year'=>$request->year,
            'caption'=>$request->caption,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('stories.list')->with('status','Stories has been successfully updated!'); 
    }

    public function delete($id) {
        $delete = Stories::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            Stories::destroy($id);
            return redirect()->route('stories.list')->with('deleted','Stories has been successfully deleted!'); 
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
