<?php

namespace App\Http\Controllers;

use App\Models\categoty_item;
use Illuminate\Http\Request;
use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Http\Requests\CategoryItem\CreateRequestCategoryItem;
use App\Http\Requests\CategoryItem\UpdateRequestCategoryItem;
class CategotyItemController extends Controller
{
    protected $categoryItemRepository;
    protected $categoryRepository;
    public function __construct(CategoryItemRepositoryInterface $categoryItemRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryItemRepository = $categoryItemRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data = $this->categoryItemRepository->all();
        return view('admin.category.list', compact('data'));
    }

    public function create()
    {
        $id_category = $this->categoryRepository->all();
        return view('admin.category.add', compact(['id_category']));
    }

    public function store(CreateRequestCategoryItem $request)
    {

        $data = $request->all();
        $this->categoryItemRepository->create($data);
        return redirect()->route('category_item.index')->with('success', 'Thành công');
    }

    public function edit($id)
    {
        $data = $this->categoryItemRepository->show($id);
        return view('admin.category.edit', compact('data'));
    }

    public function update(UpdateRequestCategoryItem $request, $id)
    {
        $data = $request->all();
        $this->categoryItemRepository->update($data, $id);
        return redirect()->route('category_item.index')->with('success', 'Thành công');
    }

    public function destroy($id)
    {
        $this->categoryItemRepository->delete($id);
        return redirect()->route('category_item.index')->with('success', 'Xóa thành công');
    }
}
