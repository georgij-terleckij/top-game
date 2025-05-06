<?php

namespace App\Http\Controllers\Api;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected $array = [
        [
            'id' => '1',
            'name' => 'odin',
        ],
        [
            'id' => '2',
            'name' => 'odin2',
        ],
        [
            'id' => '3',
            'name' => 'odin3',
        ],
        [
            'id' => '4',
            'name' => 'odin4',
        ],
        [
            'id' => '5',
            'name' => 'odin5',
        ],
        [
            'id' => '6',
            'name' => 'odin6',
        ],
        [
            'id' => '7',
            'name' => 'odin7',
        ],
        [
            'id' => '8',
            'name' => 'odin8',
        ],
        [
            'id' => '9',
            'name' => 'odin9',
        ],
        [
            'id' => '10',
            'name' => 'odin10',
        ],
    ];

    public function index(Request $request)
    {
        $data = [];
        $count = ($request->count) ?? 10;
        if (env('DB', '1')) {
            $data = Project::orderBy('id', 'desc')->take($count)->get();
        } else {
            $i = 0;
            foreach ($this->array as $item) {
                if ($count == $i) break;
                $data[] = $item;
                $i++;
            }
        }
        return json_encode($data, 200);
    }
}
