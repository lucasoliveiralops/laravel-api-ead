<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected CourseRepository $repository;

    public function __construct(CourseRepository $entity)
    {
        $this->repository = $entity;
    }

    public function index()
    {
        return CourseResource::collection($this->repository->getAllCourses());
    }

    public function show(string $id)
    {
        return new CourseResource($this->repository->getById($id));
    }
}
