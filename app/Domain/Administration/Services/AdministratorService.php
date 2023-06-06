<?php

namespace App\Domain\Administration\Services;

use App\Domain\Administration\Models\Administrator;
use App\Domain\Support\Traits\ResourceTrait;

class AdministratorService
{
    use ResourceTrait;

    public function __construct(Administrator $model = null)
    {
        $this->model = $model ?? new Administrator();
    }

    public function store($attributes)
    {
        $attributes['password'] = bcrypt($attributes['password']);
        $this->model = $this->model->create($attributes);
        return $this->model;
    }

    public function update($attributes): Administrator
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
