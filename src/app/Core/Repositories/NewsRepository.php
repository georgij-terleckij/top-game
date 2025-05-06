<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 12:11
 */

namespace App\Core\Repositories;

use App\Core\Interfaces\RepositoryInterface;


class NewsRepository implements RepositoryInterface
{
    /**
     * model property on class instances
     */
    protected $model;

    /**
     * @return mixed
     */
    public function getAdapter()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setAdapter($model): void
    {
        $this->model = $model;
    }

    /**
     * Constructor to bind model to repo
     */
    /*
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    */

    /**
     * Get counts instances of model
     */
    public function count()
    {
        return $this->model->count();
    }

    /**
     *Get all instances of model
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * show the record with the given id
     */
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * create a new record in the database
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * update record in the database
     */
    public function update(array $data, $id)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    /**
     * remove record from the database
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}