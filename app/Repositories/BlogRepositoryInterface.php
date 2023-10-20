<?php
namespace App\Repositories;

interface BlogRepositoryInterface
{
     public function all();
     public function create(array $data);
     public function update(array $data, $id);
     public function delete($id);
     public function show($id);
     public function getAllByType($type);
     public function getAllCategoryItemBlog($key);
     public function getAllByCategory($type);
}
