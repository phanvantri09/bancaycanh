<?php
namespace App\Repositories;

use App\Models\categoty_item;
use App\Models\product;
use App\Models\product_detail;
class ProductDetailRepository implements ProductDetailRepositoryInterface
{
    public function all()
    {
        return product_detail::all();
    }

    public function create(array $data)
    {
        return product_detail::create($data);
    }

    public function update(array $data, $id)
    {
        $user = product_detail::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = product_detail::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return product_detail::findOrFail($id);
    }
    public function getAllByType($type){
        return product_detail::where('type', $type)->get();
    }

    public function showByIDProduct($id){
        return product_detail::where('id_product', $id)->first();
    }
}

