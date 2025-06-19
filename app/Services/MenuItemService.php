<?php

namespace App\Services;

use App\Repositories\MenuItemRepository;
use Illuminate\Support\Facades\Validator;

class MenuItemService
{
protected $repository;

public function __construct(MenuItemRepository $repository)
{
$this->repository = $repository;
}

public function list()
{
return $this->repository->getAll();
}

public function create(array $data)
{
return $this->repository->create($data);
}

public function update($id, array $data)
{
return $this->repository->update($id, $data);
}

public function delete($id)
{
return $this->repository->delete($id);
}

public function find($id)
{
return $this->repository->find($id);
}
}
