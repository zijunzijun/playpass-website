<?php

namespace App\Domain\Administration\Services;

use App\Domain\Administration\Models\User;
use App\Domain\Support\Traits\ResourceTrait;

class UserService
{
    use ResourceTrait;

    public function __construct(User $model = null)
    {
        $this->model = $model ?? new User();
    }

    public function store($attributes)
    {
        $attributes['password'] = bcrypt($attributes['password']);
        $this->model = $this->model->create($attributes);
        return $this->model;
    }

    public function update($attributes): User
    {
        if (isset($attributes['password']) && $attributes['password']) {
            $attributes['password'] = bcrypt($attributes['password']);
        } else {
            unset($attributes['password']);
        }

        $this->model->update($attributes);
        return $this->model;
    }
}
