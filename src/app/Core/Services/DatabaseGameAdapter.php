<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 21.11.19
 * Time: 9:03
 */

namespace App\Core\Services;
namespace App\Core\Interfaces;



class DatabaseGameAdapter implements DataInterface
{
    protected static $array = [
        [
            'id' => 1,
            'name'=> '7 Days to Die',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> '7-days-to-die',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 2,
            'name'=> 'Ace Online',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'ace-online',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 3,
            'name'=> 'Aion Online',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'aion-online',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 4,
            'name'=> 'Allods Online',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'allods-online',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 5,
            'name'=> 'America\'s Army',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'americas-army',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 6,
            'name'=> 'Arma 3',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'arma-3',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 7,
            'name'=> 'Battlefield',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'battlefield',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 8,
            'name'=> 'Minecraft',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'minecraft',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 9,
            'name'=> 'Perfect world',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'perfect-world',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 10,
            'name'=> 'Silkroad Online',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'silkroad-online',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
        [
            'id' => 11,
            'name'=> 'World of Warcraft',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'meta_description'=> 'meta_description',
            'text'=> 'text',
            'to_url'=> 'world-of-warcraft',
            'in_rating' => 1,
            'img'=> 'tera.jpg',
            'developer_id'=> 'developer_id',
            'publisher_id' => 'publisher_id',
            'date_create' => '2019-11-15 11:20:58',
            'to_site'=> 'to_site',
            'created_user_id'=> '1',
            'created_at'=> '2019-11-22 16:30:06',
            'updated_at'=> '2019-11-22 16:30:06',
        ],
    ];

    public static function findOrFail($id)
    {
        foreach (self::$array as $item) {
            if ($item['id'] == $id) return $item;
        }
        return [];
    }

    public static function all()
    {
        return self::$array;
    }

    public static function count()
    {
        return count(self::$array);
    }

    public static function create($id)
    {
        return $id;
    }

    public static function update($id)
    {
        return $id;
    }

    public static function destroy($id)
    {
        return $id;
    }
}
