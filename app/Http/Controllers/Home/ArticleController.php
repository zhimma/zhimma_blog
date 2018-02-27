<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Repositories\Eloquent\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Psy\debug;

/**
 *
 *
 * @package App\Http\Controllers\Home
 */
class ArticleController extends Controller
{
    /**
     * @var ArticleRepository
     */
    protected $article;

    /**
     * ArticleController constructor.
     *
     * @param ArticleRepository $article
     */
    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id = null)
    {
        $where = [];
        if($category_id){
            $where = ['category_id'=>$category_id];
        }
        $articles = Article::where($where)->withCount('comments')->with(['comments','tags','category'])->paginate(5);
        return view('home/article/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::withCount('comments')->with(['comments.user','tags'])->findOrFail($id);
        return view('home.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 文章评论
     *
     * @author 马雄飞 <xiongfei.ma@pactera.com>
     * @date 2018年02月27日22:50:31
     */
    public function comment(Request $request)
    {
        if(empty($request->input('content'))){
            $return['msg'] = '输入留言内容';
            flash('输入回复内容')->info();
        }else{
            $article = $this->article->findRecord($request->input('id'));
            $article->comments()->create(
                [
                    'content'=>$request->input('content'),
                    'user_id' => auth()->id(),
                    'parent_id' => $request->input('parent_id'),

                ]
            );
            flash('回复成功')->success();
        }
        return redirect()->back();

    }

}
