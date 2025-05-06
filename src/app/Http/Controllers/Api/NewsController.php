<?php

namespace App\Http\Controllers\Api;

use App\Core\Pagination;
use App\Core\Repositories\NewsRepository;
use App\Core\Services\DatabaseNewsAdapter;
use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
        $adapter = (env('DB', '1')) ? new News() : new DatabaseNewsAdapter();
        $this->repository->setAdapter($adapter);
    }

    public function index(Request $request)
    {
        $page = ($request->page) ?? '1';
        $limit = ($request->count) ?? null;

        if(!empty($limit) && $page){
        $data = Pagination::getData($this->repository->all(), $limit, $page);
        } else {
            $data = $this->repository->all();
        }
        $count = ($this->repository->count())?? 0;
        $array = [
            'post'=>$data,
            'count' => ceil( $count / $limit )
        ];
        return json_encode($array, 200);
    }

    public function create(Request $request)
    {
        return [];
    }

    public function store(Request $request)
    {
        return [];
    }

    public function show($id)
    {
        $data = $this->repository->show($id);
        return json_encode($data, 200);
    }

    public function edit(Request $request)
    {
        return [];
    }

    public function update(Request $request)
    {
        return [];
    }

    public function destroy(Request $request)
    {
        return [];
    }


}
