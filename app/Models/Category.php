<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the categories for the task.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class, 'task_category', 'category_id', 'task_id');
    }
}
