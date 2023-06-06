<?php

namespace App\Domain\Support\Traits;

use Illuminate\Database\Eloquent\Model;

trait ResourceTrait
{
    protected Model $model;

    /**
     * Retrieve all records
     *
     * @param integer|null $paginate
     * @return mixed
     */
    public function all(int $paginate = null): mixed
    {
        $models = $this->model
            ->orderBy('created_at', 'desc');

        if ($paginate) {
            return $models->paginate($paginate);
        }

        return $models->get();

    }

    /**
     * Setting the model
     *
     * @param $model
     * @return mixed
     */
    public function set($model): mixed
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Getting the model
     *
     * @return Model
     */
    public function get(): Model
    {
        return $this->model;
    }

    /**
     * Find record by id
     *
     * @param $id
     * @return mixed
     */
    public function find($id): mixed
    {
        return $this->model = $this->model->find($id);
    }

    /**
     * Store new record
     *
     * @param $attributes
     * @return mixed
     */
    public function store($attributes): mixed
    {
        return $this->model = $this->model->create($attributes);
    }


    /**
     * Update existing record
     *
     * @param $attributes
     * @return mixed
     */
    public function update($attributes): mixed
    {
        return $this->model->update($attributes);
    }

    /**
     * Destroy existing record
     *
     * @return bool|null
     */
    public function destroy(): ?bool
    {
        return $this->model->delete();
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->model->first();
    }

    /**
     * @param array $array
     * @param string $key
     * @return mixed
     */
    public function optionalProperty(array $array, string $key): mixed
    {
        return isset($array[$key]) ? $array[$key] : null;
    }
}
