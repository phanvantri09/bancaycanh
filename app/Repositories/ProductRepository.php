<?php
namespace App\Repositories;

use App\Models\categoty_item;
use App\Models\product;
class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return product::all();
    }

    public function create(array $data)
    {
        return product::create($data);
    }

    public function update(array $data, $id)
    {
        $user = product::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = product::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return product::findOrFail($id);
    }
    public function getAllByType($type){
        return product::where('type', $type)->get();
    }
    public function search($key){
        return product::where('name', 'LIKE', '%'.$key.'%')->get();
    }

    public function showInfoProduct($id){
        return product::select('products.*', 'product_details.description as description', 'product_details.info_bonus as info_bonus')
        ->leftJoin('product_details', 'product_details.id_product', '=', 'products.id')
        ->where('products.id',$id)->first();
    }

    public function productNew (){
        return product::orderByDesc('created_at')->limit(20)->get();
    }
}
