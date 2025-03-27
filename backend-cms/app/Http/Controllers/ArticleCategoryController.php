<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\ArticleCategory;
use App\Http\Requests\ArticleCategoryRequest;
use Ramsey\Uuid\Uuid;

class ArticleCategoryController extends Controller
{
    public function index() {
        $id = 1;
        $data['totalCategory'] = ArticleCategory::count();
        $data['category'] = ArticleCategory::orderBy('created_time', 'desc')->get();
        
        return view('admin.news.category.categoryIndex', $data);
    }
    
    public function post(ArticleCategoryRequest $request){
        $uuid = Uuid::uuid4();

        // formatting status
        $status = $request->status;
        if(($request->status) == 1){
            $published = Carbon::now();
        }

        $input = ArticleCategory::create([
            'id'=>$uuid,
            'name'=>$request->name,
            'status'=>$request->status,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('category.list')->with('status', 'Article Category has been successfully created!'); 
    }

    public function edit($id){
        $category = ArticleCategory::find($id);

        return response()->json(['data' => $category]);
    }

    public function postEdit(Request $request) {
        $id = $request->input('idKategori');
        $item = ArticleCategory::find($id);
        $item->name = $request->input('name');
        $item->status = $request->input('status');
        $item->update();
  
        return redirect()->back()->with('status', 'Update Article Category Success');
    }

    public function delete($id){
        $delete = ArticleCategory::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            ArticleCategory::destroy($id);
            return redirect()->route('category.list')->with('deleted','Article Category has been successfully deleted!'); 
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
