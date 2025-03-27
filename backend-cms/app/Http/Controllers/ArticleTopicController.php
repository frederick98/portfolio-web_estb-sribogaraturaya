<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\ArticleTopic;
use App\Http\Requests\ArticleTopicRequest;
use Ramsey\Uuid\Uuid;

class ArticleTopicController extends Controller
{
    public function index() {
        $id = 1;
        $data['totalTopic'] = ArticleTopic::count();
        $data['topic'] = ArticleTopic::orderBy('created_time', 'desc')->get();
        
        return view('admin.news.topic.topicIndex', $data);
    }
    
    public function post(ArticleTopicRequest $request){
        $uuid = Uuid::uuid4();

        // formatting status
        $status = $request->status;
        if(($request->status) == 1){
            $published = Carbon::now();
        }

        $input = ArticleTopic::create([
            'id'=>$uuid,
            'name'=>$request->name,
            'status'=>$request->status,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('topic.list')->with('status', 'Article Topic has been successfully created!'); 
    }

    public function edit($id){
        $category = ArticleTopic::find($id);

        return response()->json(['data' => $category]);
    }

    public function postEdit(Request $request) {
        $id = $request->input('idTopic');
        $item = ArticleTopic::find($id);
        $item->name = $request->input('name');
        $item->status = $request->input('status');
        $item->update();
  
        return redirect()->back()->with('status', 'Update Article Topic Success');
    }

    public function delete($id){
        $delete = ArticleTopic::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            ArticleTopic::destroy($id);
            return redirect()->route('topic.list')->with('deleted','Article Topic has been successfully deleted!'); 
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
