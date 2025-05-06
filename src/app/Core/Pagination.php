<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 16:24
 */

namespace App\Core;


class Pagination
{
    public static function getData($data, $limit = 10, $page = 1)
    {
        $startPage = (($page * $limit) - $limit) + 1;
        $endpage = ($page * $limit);
        $temp = [];
        $i = 1;
        foreach ($data as $item) {
            if ($endpage < $i) break;
            if ($startPage <= $i && $endpage >= $i) {
                $temp[] = $item;
            }
            $i++;
        }
        return $temp;
    }
}