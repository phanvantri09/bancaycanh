<?php
namespace App\Repositories;

use App\Models\categoty_item;
use App\Models\product;
use App\Models\product_image;
class ProductImageRepository implements ProductImageRepositoryInterface
{
    public function all()
    {
        return product_image::all();
    }

    public function create(array $data)
    {
        return product_image::create($data);
    }

    public function update(array $data, $id)
    {
        $user = product_image::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = product_image::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return product_image::findOrFail($id);
    }
    public function getAllByType($type){
        return product_image::where('type', $type)->get();
    }
    public function getAllByIDProductItem($id_product)
    {
        return product_image::where('id_product', $id_product)->get();
    }
}
