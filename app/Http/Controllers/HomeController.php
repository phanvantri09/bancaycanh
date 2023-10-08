<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductDetailRepositoryInterface;
use App\Repositories\ProductImageRepositoryInterface;

class HomeController extends Controller
{
    protected $categoryItemRepository;
    protected $categoryRepository;
    protected $productRepository;
    protected $imageRepository;
    protected $productDetailRepository;
    public function __construct(ProductDetailRepositoryInterface $productDetailRepository,ProductImageRepositoryInterface $imageRepository,ProductRepositoryInterface $productRepository, CategoryItemRepositoryInterface $categoryItemRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryItemRepository = $categoryItemRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
        $this->productDetailRepository = $productDetailRepository;
    }

    public function index()
    {
        return view('user.page.home');
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
        return view('user.page.product_detail');
    }
    public function search(Request $request)
    {
        if (!empty($request->key)) {
            $data = $this->productRepository->search($request->key);
        }
        return view('user.page.search', ['$data']);
    }
}
