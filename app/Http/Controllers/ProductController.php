<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductDetailRepositoryInterface;
use App\Repositories\ProductImageRepositoryInterface;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Product\AddDetail;

use Illuminate\Support\Facades\Auth;
use App\Helpers\ConstCommon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $data = $this->productRepository->all();
        return view('admin.product.list', compact('data'));
    }
    public function show($id)
    {
        $data = $this->productRepository->showInfoProduct($id);
        $getAllByIDProductItem = $this->imageRepository->getAllByIDProductItem($id);
        return view('admin.product.show', compact(['data', 'getAllByIDProductItem']));
    }

    public function create()
    {
        $id_category = $this->categoryRepository->all();
        $id_category_item = $this->categoryItemRepository->all();
        return view('admin.product.add', compact(['id_category','id_category_item']));
    }

    public function store(CreateRequest $request)
    {
        DB::beginTransaction();
        try {
            $nameImage = 'Product-review'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
            ConstCommon::addImageToStorage( $request->img, $nameImage );
            $request->img = $nameImage;
            $category_item = $this->categoryItemRepository->show($request->id_category_item);
            $data = [
                        'name' => $request->name,
                        'content_pre' => $request->content_pre,
                        'id_category' => $category_item->id_category,
                        'id_category_item' => $request->id_category_item,
                        'img' => $nameImage
                    ];
            $this->productRepository->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi vui lòng nhập lại');
        }
        return redirect()->route('product.index')->with('success', 'Thành công');

    }

    public function edit($id)
    {
        $data = $this->productRepository->show($id);
        $id_category = $this->categoryRepository->all();
        $id_category_item = $this->categoryItemRepository->all();
        return view('admin.product.edit', compact(['id_category','data', 'id_category_item']));
    }

    public function update(UpdateRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $category_item = $this->categoryItemRepository->show($request->id_category_item);
            if ( !empty($request->img) || $request->has('img') ) {
                $nameImage = 'Product-review'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
                ConstCommon::addImageToStorage( $request->img, $nameImage );

                $data = [
                            'name' => $request->name,
                            'content_pre' => $request->content_pre,
                            'id_category' => $category_item->id_category,
                            'id_category_item' => $request->id_category_item,
                            'img' => $nameImage
                        ];
            } else {
                $data = [
                    'name' => $request->name,
                    'content_pre' => $request->content_pre,
                    'id_category' => $category_item->id_category,
                    'id_category_item' => $request->id_category_item
                ];
            }
            // dd($data);
            $this->productRepository->update($data, $id);
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
        $this->productRepository->delete($id);
        return redirect()->route('product.index')->with('success', 'Xóa thành công');
    }

    public function addImage2($id){
        $getAllByIDProductItem = $this->imageRepository->getAllByIDProductItem($id);
        return view('admin.product.addImage2', compact(['id', 'getAllByIDProductItem']));
    }
    public function addImagePost2(Request $request, $id){
        if ($request->hasFile('imageItem')) {
            $files = $request->file('imageItem');
            foreach ($files as $key => $file){
                $nameImage = 'Product-imageItem' . ConstCommon::getCurrentTime() . '-'.$key.'.' . $file->extension();
                ConstCommon::addImageToStorage($file, $nameImage);
                $request->merge([
                    'img_url' => $nameImage,
                    'id_product' => $id
                ]);
                $data = $request->all();
                $this->imageRepository->create($data);
            }
        }
        return redirect()->back()->with('success',"Thành công");
    }

    public function destroyImage($id)
    {
        $imageData = $this->imageRepository->show($id);
        Storage::disk('public')->delete('images/' . $imageData->link_image);
        if ($this->imageRepository->delete($id)) {
            return redirect()->back()->with('success', 'Xóa thành công');
        } else {
            return redirect()->back()->with('error', 'Xóa không thành công');
        }
    }
    public function adddetail($id){
        $product = $this->productRepository->show($id);
        $productDetail = $this->productDetailRepository->showByIDProduct($id);
        return view('admin.product.adddetail', compact(['id', 'product', 'productDetail']));
    }
    public function adddetailPost(AddDetail $request){
        if ($this->productDetailRepository->create($request->all())) {
            return redirect()->route('product.index')->with('success', 'Thành công');
        }
    }
}
