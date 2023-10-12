<?php
namespace App\Repositories;

use App\Models\categoty;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return categoty::all();
    }

    public function create(array $data)
    {
        return categoty::create($data);
    }

    public function update(array $data, $id)
    {
        $user = categoty::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = categoty::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return categoty::findOrFail($id);
    }
    public function getAllByType($type){
        return categoty::where('type', $type)->get();
    }
    public function getAllPluckID($type){
        return categoty::where('type', $type)->get()->pluck('id')->toArray();
    }
}
