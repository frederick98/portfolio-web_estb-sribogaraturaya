<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Models\Achievement;
use App\Http\Requests\AchievementRequest;
use App\Helpers\ImageHelper;
use Ramsey\Uuid\Uuid;

class AchievementController extends Controller
{
    //
    public function index () {
        $data['totalPic'] = Achievement::count();
        $data['picture'] = Achievement::orderBy('created_time', 'desc')->get();
        return view('admin.achievement.achievementIndex', $data);
    }

    public function create () {
        return view('admin.achievement.achievementCreate');
    }

    public function post(AchievementRequest $request){
        $uuid = Uuid::uuid4();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'achievement', 1366);
        }

        $input = Achievement::create([
            'id'=>$uuid,
            'organization'=>$request->organization,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : null,
            'reward'=>$request->reward,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('achievement.list')->with('status', 'Achievement has been successfully created!'); 
    }

    public function edit ($id) {
        // item achievement yang akan diedit
        $data['first'] = Achievement::where('id', $id)->firstOrFail();
        return view('admin.achievement.achievementEdit', $data);
    }

    public function postEdit(AchievementRequest $request, $id){
        $data = Achievement:: where('id', $id)->first();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'achievement', 1366);
        }

        $data->update([
            'organization'=>$request->organization,
            // 'image'=>$request->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'reward'=>$request->reward,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            // 'published_date'=>$request->,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('achievement.list')->with('status','Achievement has been successfully updated!'); 
    }

    public function delete($id) {
        $delete = Achievement::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            Achievement::destroy($id);
            return redirect()->route('achievement.list')->with('deleted','Achievement has been successfully deleted!'); 
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
