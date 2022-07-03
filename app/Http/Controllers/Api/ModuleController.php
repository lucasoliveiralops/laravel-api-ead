<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResource;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected ModuleRepository $repository;

    public function __construct(ModuleRepository $entity)
    {
        $this->repository = $entity;
    }

    public function index(string $courseId)
    {
        $courses = $this->repository->getModulesByCourseId($courseId);
        return ModuleResource::collection($courses);
    }
}
