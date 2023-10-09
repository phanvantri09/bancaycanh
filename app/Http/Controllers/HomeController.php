<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductDetailRepositoryInterface;
use App\Repositories\ProductImageRepositoryInterface;
use App\Helpers\ConstCommon;
class HomeController extends Controller
{
    protected $categoryItemRepository;
    protected $categoryRepository;
    protected $productRepository;
    protected $imageRepository;
    protected $productDetailRepository;
    protected $blogRepository;
    public function __construct(BlogRepositoryInterface $blogRepository, ProductDetailRepositoryInterface $productDetailRepository,ProductImageRepositoryInterface $imageRepository,ProductRepositoryInterface $productRepository, CategoryItemRepositoryInterface $categoryItemRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryItemRepository = $categoryItemRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
        $this->productDetailRepository = $productDetailRepository;
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $product = $this->productRepository->all();
        $productNew = $this->productRepository->productNew();
        $project = $this->blogRepository->all();
        return view('user.page.home', compact(['product', 'project', 'productNew']));
    }

    public function list_new()
    {
        return view('user.page.list_new');
    }

    public function new_item($id_category)
    {
        return view('user.page.new_item');
    }

    public function list_project()
    {
        return view('user.page.list_project');
    }
    public function list_product()
    {
        return view('user.page.list_product');
    }
    public function contact()
    {
        return view('user.page.contact');
    }
    public function contactPost(Request $request)
    {
        return view('user.page.home');
    }
    public function product_detail($id)
    {
        ConstCommon::autoPlusView($id);
        $product = $this->blogRepository->show();
        return view('user.page.product_detail', compact(['product']));
    }
    public function search(Request $request)
    {
        if (!empty($request->key)) {
            $data = $this->productRepository->search($request->key);
        }
        return view('user.page.search', ['$data']);
    }
}
