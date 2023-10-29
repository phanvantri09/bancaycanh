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
        $cacheProductCategory = [];
        foreach ($cacheProductCategoryItems as $key => $cacheProductCategoryItem) {
            foreach ($cacheProductCategoryItem as $keyyy => $valueCacheProductCategoryItem) {
                $cacheProductCategory[$key][$valueCacheProductCategoryItem] =  $this->productRepository->getAllCategoryItem($key, $valueCacheProductCategoryItem);
            }
        }
        $IDcategoryBlog = $this->categoryRepository->getAllPluckID(3);
        // dd($IDcategoryBlog);
        $cacheBlogCategoryItems = []; //
        foreach ($IDcategoryBlog as $key => $IDcatego) {
            $cacheBlogCategoryItems[$IDcatego] = $this->blogRepository->getAllCategoryItemBlog($IDcatego);
        }
        // dd($cacheBlogCategoryItems);
        return view('user.page.home', compact(['product', 'productNew', 'cacheProductCategory', 'cacheBlogCategoryItems']));
    }

    public function list_new(Request $request)
    {
        $list_new = [];
        $linkCategory = false;
        $idCate =  null;
        if ($request->has('category')) {
            $linkCategory = true;
            $idCate = $request->category;
            $list_new  = $this->blogRepository->getAllByCategory($request->category);
        } else  {
            $list_new = $this->blogRepository->getAllByTypeCategory(3);
        }
        return view('user.page.list_new', compact(['list_new', 'linkCategory', 'idCate']));
    }

    public function list_project(Request $request)
    {
        $list_project = [];
        $linkCategory = false;
        $idCate =  null;
        if ($request->has('category')) {
            $linkCategory = true;
            $idCate = $request->category;
            $list_project  = $this->blogRepository->getAllByCategory($request->category);
        } else  {
            $list_project = $this->blogRepository->getAllByTypeCategory(2);
        }
        return view('user.page.list_project', compact(['list_project', 'linkCategory', 'idCate']));
    }
    public function list_product(Request $request)
    {
        $category_item = [];
        $category = [];
        if ($request->has('category_item') && $request->has('category')) {
            $category = $this->categoryRepository->show($request->category);
            $category_item =  $this->categoryItemRepository->show($request->category_item);
            $product = $this->productRepository->getAllByType($request->category_item);
        } elseif ($request->has('category_item') && !$request->has('category')) {
            $category_item =  $this->categoryItemRepository->show($request->category_item);
            $product = $this->productRepository->getAllByType($request->category_item);
        } elseif (!$request->has('category_item') && $request->has('category')) {
            $category = $this->categoryRepository->show($request->category);
            $product = $this->productRepository->getAllByCategory($request->category);
        } else {
            $product = $this->productRepository->all();
        }
        return view('user.page.list_product', compact(['product', 'category_item', 'category']));
    }
    public function contact()
    {
        return view('user.page.contact');
    }
    public function introduce()
    {
        return view('user.page.introduce');
    }
    public function contactPost(Request $request)
    {
        return view('user.page.home');
    }
    public function content_new($id)
    {
        ConstCommon::autoPlusViewBlog($id);
        $blogs = $this->blogRepository->show($id);
        return view('user.page.content_new', compact(['blogs']));
    }
    public function content_project($id)
    {
        $blogs = $this->blogRepository->show($id);
        return view('user.page.content_new', compact(['blogs']));
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
        $product = [];
        $key = '';
        if ($request->has('key')) {
            $product = $this->productRepository->search($request->key);
            $key = $request->key;
        }
        return view('user.page.search', compact(['product', 'key']));
    }
}
