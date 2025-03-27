<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Article;
use App\Models\ArticleCategory;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index(Request $request) {
        // $data['totalArticle'] = Article::count();
        $artStat = 1;
        $data = Article::where('status', '=', $artStat)->where('published_date', '<=', Carbon::now())->orderBy('created_time', 'desc');
        $category = ArticleCategory::select('name')->orderby('name')->get();
        $topic = DB::table('m_topic')->select('name')->orderby('name')->get();

        if ($request->has('search')) {
            $data->where('title','ILIKE','%'.$request->input('search').'%');
        }
        if ($request->has('filter')) {
            if (in_array( $request->input('filter'), [1, 0])) {
                $data->where('status','LIKE', $request->input('filter'));
            } else {
                abort(404);
            }
        }
        if ($request->has('c')) {
            $data->whereRaw("'" . $request->input('c') . "' = ANY(category_id)");
        }

        $article = $data->get();

        return view('front.news.index', [
            'category' => $category,
            'topic' => $topic,
            'article' => $article
        ]);
    }

    public function details($slug) {
        // item article yg dicari
        $data['item'] = Article::select(
                'ctn_article.title', 
                'ctn_article.title_tag', 
                'ctn_article.meta_keyword', 
                'ctn_article.meta_description', 
                'ctn_article.image', 
                'ctn_article.alt_text',
                'ctn_article.hashtag', 
                'ctn_article.published_date', 
                'ctn_article.detail', 
                'm_category.name as cName', 
                'm_topic.name as tName')
            ->join('m_topic', 'ctn_article.id_topic', '=', 'm_topic.id')
            ->join('m_category', 'ctn_article.id_category', '=', 'm_category.id')
            ->where('url_slug', $slug)
            ->firstOrFail();
        
        // current URL
        $data['url'] = url()->current();
        // dd($data);


        // buat "article lainnya" kalo mau diimplementasi
        // $data['other'] = Article::where('id', '<>', $data['item']['id'])->inRandomOrder()
        // ->limit(3) // here is yours limit
        // ->get();

        return view('front.news.details', $data);
    }

    public function search(Request $request){
        $artStat = 1;

        // $req = $request->all();
        // $query = Article::where(function($q) use ($req){
        //     foreach ($req as $column => $key) {
        //         if($column == 'category' && !empty($key)){
        //             $q->whereIn('category', $key);
        //         }
        //         if($column == 'topic' && !empty($key)){
        //             $q->whereIn('topic', $key);
        //         }
        //     }
        // });

        // $search = empty($request->search) ? '' : $request->search;

        // $data['article'] = $query->where('status', '=', $artStat)
        //     ->where('title', 'LIKE', '%'. $search/ '%')
        //     -> orderBy('created_time', 'desc')
        //     ->get();

        // $data['totalArticle'] = Article::count();
        $artStat = 1;

        if($request->category){
            $cat = $request->category;
            $data['article'] = Article::join('m_category', 'ctn_article.id_category', '=', 'm_category.id')
                ->where('m_category.name', '=', $cat, 'AND', 'ctn_article.status', '=', $artStat)
                ->orderBy('created_time', 'desc')->get();
        }

        if($request->topic){
            $top = $request->topic;
            $data['article'] = Article::join('m_topic', 'ctn_article.id_topic', '=', 'm_topic.id')
                ->where('m_topic.name', '=', $top, 'AND', 'ctn_article.status', '=', $artStat)
                ->orderBy('created_time', 'desc')->get();
        }

        // $data['article'] = Article::where('status', '=', $artStat)->orderBy('created_time', 'desc')->get();
        $data['category'] = ArticleCategory::select('name')->orderby('name')->get();
        $data['topic'] = DB::table('m_topic')->select('name')->orderby('name')->get();

        return view('front.news.search', $data);
    }
}
