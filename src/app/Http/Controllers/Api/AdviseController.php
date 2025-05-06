<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdviseController extends Controller
{

    public function index(Request $request)
    {
        $data = [
            [
                'id' => '10',
                'title' => 'first name 1',
                'text'=> 'ti my the first text 1',
                'img'=> '1.jpeg'
            ],
            [
                'id' => '11',
                'title' => 'first name 2',
                'text'=> 'ti my the first text 2',
                'img'=> '2.jpeg'
            ],
            [
                'id' => '12',
                'title' => 'first name 3',
                'text'=> 'ti my the first text 3',
                'img'=> '3.jpeg'
            ],
            [
                'id' => '14',
                'title' => 'first name 4',
                'text'=> 'ti my the first text 4',
                'img'=> '4.jpeg'
            ],
            [
                'id' => '15',
                'title' => 'first name 5',
                'text'=> 'ti my the first text 5',
                'img'=> '5.jpeg'
            ],
            [
                'id' => '16',
                'title' => 'first name 6',
                'text'=> 'ti my the first text 6',
                'img'=> '6.jpeg'
            ],
        ];
        return json_encode($data, 200);
    }
}