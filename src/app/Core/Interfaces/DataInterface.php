<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 12:42
 */

namespace App\Core\Interfaces;


interface DataInterface
{
    public static function count();

    public static function all();

    public static function findOrFail($id);

    public static function create($id);

    public static function update($id);

    public static function destroy($id);
}