<?php

namespace App\Repositories\Task;

use App\Repositories\EloquentRepository;
use App\User;
use App\Model\Task;

class TaskRepository extends EloquentRepository
{

    public function getModel()
    {
        return Task::class;
    }

    public function getDataByUserCreated(User $user)
    {
        return $user->tasks;
    }

    public function createByUser(User $user, array $attributes)
    {
        return $user->tasks()->create($attributes);
    }
}
