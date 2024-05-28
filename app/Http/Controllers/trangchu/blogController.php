<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Http\Services\Sanpham\sanphamService;
use App\Models\binhluanBlog;
use App\Models\blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use  App\Http\Services\blog\BlogService;

class blogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogservice)
    {
        $this->blogService = $blogservice;
    }

    public function create(){
        return view('web.admin.Blog.add', [
            'title' => 'Thêm blog mới',
            'nhanhieus' => $this->blogService->getnhanhieu(),
        ]);
    }
    public function store(BlogRequest $request){
//        dd($request->input());
        $this->blogService->addBlog($request);
        return redirect()->back();
    }
    public function index(){

        return view('web.admin.Blog.list', [
            'title' => 'danh sách BLOG',
            'blogs' => $this->blogService->getblog(),

        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->blogService->destroy($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => ' Xóa thành công!'
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => ' Xóa không thành công!'
        ]);
    }
    public function show(blog $blog)
    {
        return view('web.admin.Blog.edit', [
            'title' => 'Sửa thông tin BLOG',
            'blogs' => $blog,
            'nhanhieus' => $this->blogService->getnhanhieu(),
        ]);
    }
    public function update(Request $request, blog $blog)
    {
        $this->blogService->update($request , $blog);
        return redirect('/trangchu/admin/blog/list');
    }

    public function index_blog(){
//        echo '123';
        return view('web.blog.blog', [
            'title' => 'Blog',
            'blogs' => $this->blogService->getblog(),

        ]);
    }

    public function ndung_blog(blog $id_blog){
//        echo '123';
        return view('web.blog.blogNdung', [
            'title' => 'Blog',
            'idblogs' => $id_blog,
            'blogs' => blog::where('id', '!=', null)->get(),
            'SPTTs' => Product::where('id', '!=', null)->paginate(7),
            'cmts' => binhluanBlog::where('id', '!=', null)->get(),
            'uses' => User::where('id', '!=', null)->get(),
        ]);
    }


}
