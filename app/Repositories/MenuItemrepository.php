<?php

namespace App\Repositories;

use App\Models\MenuItem;

class MenuItemRepository
{
public function getAll()
{
return MenuItem::all();
}

public function find($id)
{
return MenuItem::findOrFail($id);
}

public function create(array $data)
{
return MenuItem::create($data);
}

public function update($id, array $data)
{
$item = MenuItem::findOrFail($id);
$item->update($data);
return $item;
}

public function delete($id)
{
return MenuItem::findOrFail($id)->delete();
}
}
