<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Helpers\ImageHelper;
use App\Http\Requests\ArticleRequest;
use Ramsey\Uuid\Uuid;


class NewsInsightController extends Controller
{
    public function index() {
        $data['totalArticle'] = Article::count();
        $data['article'] = Article::orderBy('created_time', 'desc')->get();
        return view('admin.news.newsList', $data);
    }

    public function create() {
        $data['category'] = ArticleCategory::select('id', 'name')->orderby('name')->get();
        $data['topic'] = DB::table('m_topic')->select('id', 'name')->orderby('name')->get();
        return view('admin.news.newsCreate', $data);
    }

    public function post(ArticleRequest $request){
        $URL = env('APP_URL');
        $uuid = Uuid::uuid4();

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'news', 1366);
        }

        // formatting status
        $status = $request->status;
        if(($request->status) == 1){
            $published = Carbon::now();
        }

        $input = Article::create([
            'id'=>$uuid,
            // 'image'=>$request->image = isset($path) ? $path : null,
            'image'=>$request->image = isset($path) ? $path : null,
            'title'=>$request->title,
            'id_category'=>$request->category,
            'id_topic'=>$request->topic,
            'short_description'=>$request->shortDesc,
            'detail'=>$request->detail,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            'url_slug'=>$request->slug,
            'hashtag'=>$request->hashtag,
            'title_tag'=>$request->metaTitle,
            'meta_description'=>$request->metaDesc,
            'meta_keyword'=>$request->metaKeyword,
            'published_date'=>$request->published_date,
            'created_time'=>Carbon::now(),
            'created_by'=>Auth::user()->id,
        ]);
        return redirect()->route('news.list')->with('status','Article has been successfully created!'); 
    }

    public function edit($id) {
        // item article yg akan diedit
        $data['first'] = Article::select(
                'ctn_article.title', 
                'ctn_article.title_tag', 
                'ctn_article.meta_keyword', 
                'ctn_article.meta_description', 
                'ctn_article.url_slug',
                'ctn_article.image', 
                'ctn_article.alt_text', 
                'ctn_article.status', 
                'ctn_article.published_date', 
                'ctn_article.short_description', 
                'ctn_article.detail', 
                'ctn_article.hashtag', 
                'm_category.id as idC',
                'm_category.name as cName', 
                'm_topic.id as idT',
                'm_topic.name as tName')
            ->join('m_topic', 'ctn_article.id_topic', '=', 'm_topic.id')
            ->join('m_category', 'ctn_article.id_category', '=', 'm_category.id')
            ->where('ctn_article.id', $id)
            ->firstOrFail();
        $data['category'] = ArticleCategory::select('id', 'name')->orderby('name')->get();
        $data['topic'] = DB::table('m_topic')->select('id', 'name')->orderby('name')->get();

        return view('admin.news.newsUpdate', $data);
    }

    public function postEdit(ArticleRequest $request, $id){
        $data = Article::where('id', $id)->first();
        $URL = env('APP_URL');

        // image formatting
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $path = ImageHelper::uploadAndResize($images, 'news', 1366);
        }

        // formatting status
        $status = $request->status;
        if(($request->status) == 1){
            $published = Carbon::now();
        }

        $data->update([
            // 'image'=>$request->image = isset($path) ? $path : $data->image,
            'image'=>$request->image = isset($path) ? $path : $data->image,
            'title'=>$request->title,
            'id_category'=>$request->category,
            'id_topic'=>$request->topic,
            'short_description'=>$request->shortDesc,
            'detail'=>$request->detail,
            'alt_text'=>$request->alt_text,
            'status'=>$request->status,
            'url_slug'=>$request->slug,
            'hashtag'=>$request->hashtag,
            'title_tag'=>$request->metaTitle,
            'meta_description'=>$request->metaDesc,
            'meta_keyword'=>$request->metaKeyword,
            'published_date'=>$request->published_date,
            'updated_time'=>Carbon::now(),
            'updated_by'=>Auth::user()->id,
        ]);
        return redirect()->route('news.list')->with('status','Article has been successfully updated!');  
    }

    public function delete($id){
        $delete = Article::find($id);
        if(isset($delete)){
            // kalo pake soft delete
            // $delete->update([
            //     // 'deleted_time'=>Carbon::now(),
            //     'deleted_by'=>Auth::user()->id,
            // ]);
            Article::destroy($id);
            return redirect()->route('news.list')->with('deleted','Article has been successfully deleted!'); 
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

    public function newslayout() {
        return view('admin.news.newsLayout');
    }

    public function filter(ArticleRequest $request, Article $article){
        $article = $article->newQuery();

        // Search for an article based on their category
        if($request->has('category')){
            $article->where('category', $request->input('category'));
        }

        // Search for an article based on their topic
        if($request->has('topic')){
            $article->where('topic', $request->input('topic'));
        }

        // Search for an article based on their status
        if($request->has('status')){
            $article->where('status', $request->input('status'));
        }

        // Get the results
        return $user->get();
    }
}
