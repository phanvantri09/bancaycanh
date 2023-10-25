<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

use App\Repositories\CategoryItemRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ContactRepositoryInterface;
use App\Http\Requests\Contact\CreateRequest;
use App\Http\Requests\Contact\UpdateRequest;

use Illuminate\Support\Facades\Auth;
use App\Helpers\ConstCommon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ContactController extends Controller
{
    protected $categoryItemRepository;
    protected $categoryRepository;
    protected $productRepository;
    protected $contactRepository;
    public function __construct(ContactRepositoryInterface $contactRepository,ProductRepositoryInterface $productRepository, CategoryItemRepositoryInterface $categoryItemRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryItemRepository = $categoryItemRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $data = $this->contactRepository->all();
        return view('admin.contact.list', compact('data'));
    }

    public function create()
    {
        $id_category = $this->categoryRepository->all();
        $id_category_item = $this->categoryItemRepository->all();
        return view('admin.contact.add', compact(['id_category','id_category_item']));
    }

    public function store(CreateRequest $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $data = ['name' => $request->name ?? null,
            'email' => $request->email ?? null ,
            'tel' => $request->tel ?? null,
            'content' => $request->content ?? null,
            'status' => 1
        ];
            $this->contactRepository->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Đã xảy ra lỗi vui lòng nhập lại');
        }
        return redirect()->back()->with('success', 'Thành công');

    }

    public function edit($id)
    {
        $data = $this->contactRepository->show($id);
        return view('admin.contact.edit', compact('data'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        $this->contactRepository->update($data, $id);
        return redirect()->route('contact.index')->with('success', 'Thành công');
    }

    public function destroy($id)
    {
        $this->contactRepository->delete($id);
        return redirect()->route('contact.index')->with('success', 'Xóa thành công');
    }

    public function changeStatus($id, $status)
    {

        if ($this->contactRepository->changeStatus($id, $status)) {
            return back()->with('message', 'Thành Công');
        } else {
            return back()->with('error', 'Lỗi tiến trình');
        }

    }

}
