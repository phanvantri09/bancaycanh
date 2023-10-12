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
        $IDcategory = $this->categoryRepository->getAllPluckID(1);
        $cacheProductCategoryItems = [];
        foreach ($IDcategory as $key => $IDcatego) {
            $cacheProductCategoryItems[$IDcatego] = $this->categoryItemRepository->getAllPluckIDAray([$IDcatego]);
        }
        // $IDcategoryItem = $this->categoryItemRepository->getAllPluckIDAray($IDcategory);
        // dd($cacheProductCategoryItems);
        $cacheProductCategory = [];
        // foreach ($IDcategory as $key => $IDcategor) {
            // $cacheProductCategory[$cacheProductCategoryItem] = ;
            foreach ($cacheProductCategoryItems as $key => $cacheProductCategoryItem) {
                foreach ($cacheProductCategoryItem as $keyyy => $valueCacheProductCategoryItem) {
                    $cacheProductCategory[$key][$valueCacheProductCategoryItem] =  $this->productRepository->getAllCategoryItem($valueCacheProductCategoryItem);
                }
            }
        // }
        // dd($cacheProductCategory);
        return view('user.page.home', compact(['product', 'productNew', 'cacheProductCategory']));
    }

    public function list_new()
    {
        $list_new = $this->blogRepository->getAllByTypeCategory(3);
        return view('user.page.list_new', compact(['list_new']));
    }

    public function new_item($id_category)
    {
        return view('user.page.new_item');
    }

    public function list_project()
    {
        $list_project = $this->blogRepository->getAllByTypeCategory(2);
        return view('user.page.list_project', compact(['list_project']));
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
        $product = $this->productRepository->showInfoProduct($id);
        $image = $this->imageRepository->getAllByIDProductItem($id);
        return view('user.page.product_detail', compact(['product','image']));
    }
    public function search(Request $request)
    {
        if (!empty($request->key)) {
            $data = $this->productRepository->search($request->key);
        }
        return view('user.page.search', ['$data']);
    }
}
