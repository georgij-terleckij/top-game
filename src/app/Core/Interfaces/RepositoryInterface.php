<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 12:08
 */

namespace App\Core\Interfaces;


interface RepositoryInterface
{
    public function getAdapter();

    public function setAdapter($adapter);

    public function count();

    public function all();

    public function show($id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);
}