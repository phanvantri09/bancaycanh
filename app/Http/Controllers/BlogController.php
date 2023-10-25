<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;

use App\Http\Requests\Blog\CreateRequest;
use App\Http\Requests\Blog\UpdateRequest;

use Illuminate\Support\Facades\Auth;
use App\Helpers\ConstCommon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    protected $categoryItemRepository;
    protected $categoryRepository;
    protected $productRepository;
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository, ProductRepositoryInterface $productRepository, CategoryItemRepositoryInterface $categoryItemRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryItemRepository = $categoryItemRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $data = $this->blogRepository->all();
        return view('admin.blog.list', compact('data'));
    }

    public function create()
    {
        $id_category = $this->categoryRepository->all();
        $id_category_item = $this->categoryItemRepository->all();
        return view('admin.blog.add', compact(['id_category','id_category_item']));
    }

    public function store(CreateRequest $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $nameImage = 'Blog-review'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
            ConstCommon::addImageToStorage( $request->img, $nameImage );
            $request->img = $nameImage;
            $data = [
                        'name' => $request->name,
                        'content_pre' => $request->content_pre,
                        'content_main' => $request->content_main,
                        'id_category' => $request->id_category,
                        'img' => $nameImage
                    ];
            $this->blogRepository->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi vui lòng nhập lại');
        }
        return redirect()->route('blog.index')->with('success', 'Thành công');

    }

    public function edit($id)
    {
        $id_category = $this->categoryRepository->all();
        $id_category_item = $this->categoryItemRepository->all();
        $data = $this->blogRepository->show($id);
        return view('admin.blog.edit', compact(['id_category','id_category_item', 'data']));
    }

    public function update(UpdateRequest $request, $id)
    {

        DB::beginTransaction();
        try {
            if ( !empty($request->img) || $request->has('img') ) {
                $nameImage = 'Blog-review'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
                ConstCommon::addImageToStorage( $request->img, $nameImage );
                $data = [
                            'name' => $request->name,
                            'content_pre' => $request->content_pre,
                            'id_category' => $request->id_category,
                            'content_main' => $request->content_main,
                            'img' => $nameImage
                        ];
            } else {
                $data = [
                    'name' => $request->name,
                    'content_pre' => $request->content_pre,
                    'id_category' => $request->id_category,
                    'content_main' => $request->content_main,
                ];
            }
            $this->blogRepository->update($data, $id);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi vui lòng nhập lại');
        }
        return redirect()->back()->with('success', 'Thành công');
    }

    public function destroy($id)
    {
        $this->blogRepository->delete($id);
        return redirect()->route('blog.index')->with('success', 'Xóa thành công');
    }
}
