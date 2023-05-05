<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));

    }

    public function show(Worker $worker)
    {
      return view('worker.show', compact('worker'));
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'Markov@mail.ru',
            'age' => 20,
            'description' => 'I am Mark',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Mark was created';
    }

    public function update()
    {
        $worker = Worker::find(3);

//        $worker->name = 'New Name';
//        $worker->save();

        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov',
            'email' => 'Petrov@mail.ru',
            'age' => 28,
            'description' => 'I am Karl',
            'is_married' => 1,
        ]);

        return 'Change name and surname';
    }

    public function delete()
    {
        $worker = Worker::find(2);
        $worker->delete();
        return 'One worker was deleted';
    }
}
