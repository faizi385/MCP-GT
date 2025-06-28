<?php

namespace App\Repositories\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository
{

    /**
     * @var Model
     */
    public $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model = null)
    {
        $this->model = $model;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    public function latest()
    {
        $query = $this->model::query();
        return $this->model->timestamps ? $query->latest() : $query->latest("id");
    }

    public function getLatest()
    {
        return $this->latest()->get();
    }

    /**
     * @param integer $id
     * @return Model|null
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param integer $id
     * @return Model
     * @throws ModelNotFoundException
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param string $slug
     * @return Model
     * @throws ModelNotFoundException
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function findByQuery($query)
    {
        return $this->model->where($query)->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return $this->model->query();
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function instance(array $attributes = [])
    {
        $model = $this->model;
        return new $model($attributes);
    }

    /**
     * @param int|null $perPage
     * @return mixed
     */
    public function paginate($perPage = null)
    {
        return $this->model->paginate($perPage);
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data = [])
    {
        return $this->model->create($data);
    }

    public function store(array $data)
    {
        return $this->create($data);
    }

    /**
     * @param integer $id
     * @param array $data
     * @return Model
     */
    public function update(array $data = [], $id)
    {
        $instance = $this->findOrFail($id);
        $instance->fill($data);
        $instance->save();
        return $instance;
    }

    /**
     * @param integer $id
     * @return Model
     * @throws \Exception
     */
    public function delete($id)
    {
        $model = $this->findOrFail($id);
        return $model->delete();
    }

    public function getSingle($id)
    {
        return $this->model::singleInfo()->findorfail($id);
    }

    public function getPaginated($data = [])
    {
        $pagination_length = $data["page_size"] ?? config("general.request.pagination_length");
        $query = $this->model::listingInfo()->filters($data);

        if (isset($data['sort_by'])) {
            $query->orderBy($data['sort_by'], $data['order']);
        } else {

            $this->model->timestamps ? $query->latest() : $query->latest("id");
        }
        
        return $query->paginate($pagination_length);
    }

    public function getAll($data = [])
    {
        $query = $this->model::listingInfo()->filters($data);
        
        if (isset($data['sort_by'])) {
            $query->orderBy($data['sort_by'], $data['order']);
        } else {

            $this->model->timestamps ? $query->latest() : $query->latest("id");
        }

        return $query->get();
    }

    public function first($data = null)
    {
        return $this->model->where('email', $data)->first();
    }

    public function multiDelete($data = [])
    {
        return $this->model::whereIn('id', $data['id'])->delete();
    }
}

