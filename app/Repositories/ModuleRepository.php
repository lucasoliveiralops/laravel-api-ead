<?php

namespace App\Repositories;

use App\Models\Module;

class ModuleRepository
{
  protected Module $entity;

  public function __construct(Module $entity)
  {
    $this->entity = $entity;
  }

  public function getModulesByCourseId(string $courseId)
  {
    return $this->entity->where('course_id', $courseId)->get();
  }
}
