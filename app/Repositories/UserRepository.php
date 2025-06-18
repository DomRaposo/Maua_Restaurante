<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
public function create(array $data)
{
return User::create($data);
}

public function all()
{
return User::all();
}

public function find($id)
{
return User::findOrFail($id);
}

public function update($id, array $data, $user)
{
$user = $user::findOrFail($id);
$user->update($data);
return $user;
}

public function delete($id)
{
return User::destroy($id);
}
}
