<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Get the categories for the task.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'task_category', 'task_id', 'category_id');
    }
}
