<?php
namespace App\Repositories;

use App\Models\categoty_item;

class CategoryItemRepository implements CategoryItemRepositoryInterface
{
    public function all()
    {
        return categoty_item::all();
    }

    public function create(array $data)
    {
        return categoty_item::create($data);
    }

    public function update(array $data, $id)
    {
        $user = categoty_item::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = categoty_item::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return categoty_item::findOrFail($id);
    }
    public function getAllByType($type){
        return categoty_item::where('type', $type)->get();
    }
    public function getAllPluckIDAray($array){
        return categoty_item::whereIn('id_category', $array)->get()->pluck('id')->toArray();
    }
}
