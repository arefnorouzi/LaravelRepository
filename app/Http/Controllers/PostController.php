<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;
class PostController extends Controller
{
    private $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(){
        $model = $this->repository->getAll();
        return response()->json([
            'status' => true,
            'model' => $model
        ]);
    }

    public function show($id){
        $model = $this->repository->getPost($id);
        return response()->json([
            'status' => true,
            'model' => $model
        ]);
    }
}
