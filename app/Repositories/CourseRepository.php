<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
  protected Course $entity;

  public function __construct(Course $entity)
  {
    $this->entity = $entity;
  }

  public function getAllCourses()
  {
    return Course::all();
  }

  public function getById(string $id)
  {
    return Course::findOrFail($id);
  }
}
