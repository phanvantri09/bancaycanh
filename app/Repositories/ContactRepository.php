<?php
namespace App\Repositories;

use App\Models\categoty_item;
use App\Models\product;
use App\Models\contact;
class ContactRepository implements ContactRepositoryInterface
{
    public function all()
    {
        return contact::all();
    }

    public function create(array $data)
    {
        return contact::create($data);
    }

    public function update(array $data, $id)
    {
        $user = contact::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = contact::findOrFail($id);
        $user->delete();
    }

    public function show($id)
    {
        return contact::findOrFail($id);
    }
    public function getAllByType($type){
        return contact::where('type', $type)->get();
    }
    public function changeStatus($id, $status){
        $user = contact::findOrFail($id);
        $user->status = $status;
        return $user->save();
    }
}
