<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::with('categories')->get();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function store(Request $request){
        $task = new Task();
        $task->name = $request->get('name');
        $task->save();

        if ($request->get('php')) {
            $category = Category::where('name', 'PHP')->first();
            $task->categories()->attach($category);
        }
        if ($request->get('js')) {
            $category = Category::where('name', 'JS')->first();
            $task->categories()->attach($category);
        }
        if ($request->get('css')) {
            $category = Category::where('name', 'CSS')->first();
            $task->categories()->attach($category);
        }

        return $task;
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->categories()->detach();
        return $task->destroy($id); 
    }
}
